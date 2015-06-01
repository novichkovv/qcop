<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 06.03.15
 * Time: 19:47
 */
abstract class controller
{
    protected $vars = array();
    protected $args;
    protected $system_header;
    protected $header;
    protected $footer;
    protected $system_footer;
    protected $controller_name;
    protected $action_name;
    protected $sidebar;
    public  $check_auth;
    protected $scripts = array();

    function __construct($controller, $action)
    {
        if(isset($_POST['log_out_btn'])) {
            $this->logOut();
            header('Location: ' . SITE_DIR);
            exit;
        }
        if(isset($_POST['login_btn'])) {
            if($this->auth($_POST['email'], md5($_POST['password']), $_POST['remember'])) {
                header('Location: ' . SITE_DIR);
            } else {
                $this->render('error', true);
            }
        }
        registry::set('log', array());
        $this->controller_name = $controller;
        $this->check_auth = $this->checkAuth();
        if($this->check_auth) {
            $this->sidebar();
        }
        $this->action_name = $action . ($this->check_auth ? '_na' : '');
    }

    protected function view($template)
    {
        $this->render('log', registry::get('log'));
        $template_file = ROOT_DIR . 'templates' . DS . PROJECT . DS . $template . '.php';
        if(!file_exists($template_file)) {
            throw new Exception('cannot find template in ' . $template_file);
        }
        $this->render('scripts', $this->scripts);
        foreach($this->vars as $k => $v) {
            $$k = $v;
        }
        if($this->system_header !== false) {
            require_once(!$this->system_header ? ROOT_DIR . 'templates' . DS . PROJECT . DS . 'system_header.php' : ROOT_DIR . 'templates' . DS . PROJECT . DS . $this->system_header . '.php');
        }

        if($this->header !== false) {
            require_once(!$this->header ? ROOT_DIR . 'templates' . DS . PROJECT . DS . 'header.php' : ROOT_DIR . 'templates' . DS . PROJECT . DS . $this->header . '.php');
        }
        if($this->sidebar !== false) {
            require_once(!$this->header ? ROOT_DIR . 'templates' . DS . PROJECT . DS . 'sidebar.php' : ROOT_DIR . 'templates' . DS . PROJECT . DS . $this->sidebar() . '.php');
        }
        if($template_file !== false) {
            require_once($template_file);
        }
        if($this->footer !== false) {
            require_once(!$this->footer ? ROOT_DIR . 'templates' . DS . PROJECT . DS . 'footer.php' : ROOT_DIR . 'templates' . DS . PROJECT . DS . $this->footer . '.php');
        }
        if($this->system_footer !== false) {
            require_once(!$this->system_footer ? ROOT_DIR . 'templates' . DS . PROJECT . DS . 'system_footer.php' : ROOT_DIR . 'templates' . DS . PROJECT . DS . $this->system_footer . '.php');
        }
    }

    protected function view_only($template)
    {
        $this->render('log', registry::get('log'));
        $template_file = ROOT_DIR . 'templates' . DS . PROJECT . DS . $template . '.php';
        if(!file_exists($template_file)) {
            throw new Exception('cannot find template in ' . $template_file);
        }
        foreach($this->vars as $k => $v) {
            $$k = $v;
        }
        require_once($template_file);
    }

    abstract function index();

    protected function render($key, $value)
    {
        $this->vars[$key] = $value;
    }

    protected function model($model, $table = null, $db = null, $user = null, $password = null)
    {
        $models = registry::get('models');
        if(!$m = $models[$model][$table]) {
            $model_file = ROOT_DIR . 'models' . DS . $model . '_model.php';
            if(file_exists($model_file)) {
                $model_class = $model . '_model';
                $m = new $model_class($table ? $table : $model, $db, $user, $password);
            } else {
                $m = new default_model($model);
            }
            $models[$model][$table];
            registry::set('models', $models);
        }
        return $m;
    }

    public function four_o_four() {
        $this->view('404');
    }

    /**
     * @return bool
     */
    protected function checkAuth()
    {
        if($_SESSION['auth']) {
            if($user = $this->model('users')->getByFields(array(
                'id' => $_SESSION['user']['id'],
                'email' => $_SESSION['user']['email'],
                'user_password' => $_SESSION['user']['user_password']
            ))) {
                registry::set('auth', true);
                registry::set('user', $user);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * @param string $email
     * @param string $password
     * @param bool $remember
     * @return bool
     */

    protected function auth($email, $password, $remember = false)
    {
        if(!$password) return false;
        if($user = $this->model('users')->getByFields(array(
            'email' => $email,
            'user_password' => $password
        ))) {
            if(!$remember) {
                $_SESSION['user']['id'] = $user['id'];
                $_SESSION['user']['email'] = $user['email'];
                $_SESSION['user']['user_password'] = $user['user_password'];
                $_SESSION['auth'] = 1;
            }
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return void
     */

    protected function logOut()
    {
        unset($_SESSION['user']);
        unset($_SESSION['auth']);
    }

    private function sidebar()
    {
        $system_route = trim($_REQUEST['route'], '/');
        $tmp = $this->model('system_routes_user_groups_relations')->getByField('user_group_id', registry::get('user')['user_group_id'], true);
        $permissions = [];
        foreach($tmp as $v) {
            $permissions[$v['system_route_id']] = 1;
        }
        $sidebar = [];
        $tmp = $this->model('system_routes')->getAll('position');
        $permit_page = false;
        foreach($tmp as $v) {
            if(!$v['parent']) {
                foreach($v as $key => $val) {
                    if($permissions[$v['id']]) {
                        if($v['route'] == $system_route) {
                            $permit_page = true;
                        }
                        if(!$v['hidden']) {
                            $sidebar[$v['id']][$key] = $val;
                        }
                    }
                }
            } else {
                foreach($v as $key => $val) {
                    if($permissions[$v['id']]) {
                        if($v['route'] == $system_route) {
                            $permit_page = true;
                            registry::set('page_permission', $permissions[$v['id']]);
                        }
                        if(!$v['hidden']) {
                            $sidebar[$v['parent']]['children'][$v['id']][$key] = $val;
                        }
                    }
                }
            }
        }
        if(!$permit_page) {
            $this->view('access_denied');
            exit;
        }
        $this->render('sidebar', $sidebar);
    }

    public function getDataTable($params, $print = null)
    {
        $search = get_object_vars(json_decode($_REQUEST['params']));
        foreach($search as $k=>$v)
        {
            $params['where'][$k] = array(
                'sign' => $v->sign,
                'value' => $v->value
            );
        }
        $params['limits'] = isset($_REQUEST['iDisplayStart']) ? $_REQUEST['iDisplayStart'].','.$_REQUEST['iDisplayLength'] : '';
        $params['order'] = $_REQUEST['iSortCol_0'] ? $params['select'][$_REQUEST['iSortCol_0']].($_REQUEST['sSortDir_0'] ? ' '.$_REQUEST['sSortDir_0'] : '') : '';
        $res = $this->model('default')->getFilteredData($params, $params['table']);
        if($print) {
            print_r($res);
        }
        $rows['aaData'] = $res['rows'];
        $rows['iTotalRecords'] = $this->model(explode(' ', $params['table'])[0])->countByField();
        $rows['iTotalDisplayRecords'] = $res['count'];
        return($rows);
    }

    /**
     * @param mixed $value
     */

    protected function log($value)
    {
        $log = registry::get('log');
        registry::remove('log');
        $log[] = print_r($value,1);
        registry::set('log', $log);
    }

    /**
     * @param string $file
     * @param mixed $value
     * @param string $mode
     */

    protected function writeLog($file, $value, $mode = 'a+') {
        $f = fopen(ROOT_DIR . 'logs' . DS . $file . '.log', $mode);
        fwrite($f, date('Y-m-d H:i:s') . ' - ' .print_r($value, true) . "\n");
        fclose($f);
    }

    /**
     * @param mixed $file_name
     */

    protected function addScript($file_name) {
        if(is_array($file_name)) {
            foreach($file_name as $file) {
                $this->scripts[] = $file;
            }
        } else {
            $this->scripts[] = $file_name;
        }
    }

}