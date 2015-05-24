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
    public  $check_auth;
    protected $scripts = array();

    function __construct($controller, $action)
    {
        registry::set('log', array());
        $this->controller_name = $controller;
        if(!$this->check_auth = $this->checkAuth()) {
            if($action != 'index' || $controller != 'index_controller') {
                header('Location: ' . SITE_DIR);
                exit;
            }
        };
        if($this->check_auth) {
            $this->sidebar();
        }
        $this->action_name = $action . ($this->check_auth ? '_na' : '');
//        $words = $this->multilingual(registry::get('language'));
//        $this->render('words', $words);
    }

    protected function view($template)
    {
        $this->render('log', registry::get('log'));
        require_once(ROOT_DIR . 'classes' . DS . 'simple_html_dom_class.php');
        $template_file = ROOT_DIR . 'templates' . DS . $template . '.php';
        if(!file_exists($template_file)) {
            throw new Exception('cannot find template in ' . $template_file);
        }
        $this->render('scripts', $this->scripts);
        foreach($this->vars as $k => $v) {
            $$k = $v;
        }
        if($this->system_header !== false) {
            require_once(!$this->system_header ? ROOT_DIR . 'templates' . DS . 'system_header.php' : ROOT_DIR . 'templates' . DS . $this->system_header . '.php');
        }

        if($this->header !== false) {
            require_once(!$this->header ? ROOT_DIR . 'templates' . DS . 'header.php' : ROOT_DIR . 'templates' . DS . $this->header . '.php');
        }
        if($template_file !== false) {
            ob_start();
            require_once($template_file);
            $tplContent =  ob_get_clean();
            $html = str_get_html($tplContent);
            $content = $html->root;
            $elements = $content->find('[data-element]');
            $permissions = $this->model('users')->getUserElements(registry::get('user')['user_group_id']);
            foreach($elements as $k => $element) {
                $key = $element->attr['data-element'];
                if($permissions[$key]['value'] === null) {
                    switch($key) {
                        case "edit_btn":
                            if (registry::get('page_permission') < 2) {
                                $element->disabled = true;
                            }
                            break;
                        case "delete_btn":
                        case "create_btn":
                            if (registry::get('page_permission') < 3) {
                                $element->disabled = true;
                            }
                            break;
                    }
                }
                $permission = $permissions[$key]['value'] > registry::get('page_permission') ? registry::get('page_permission') : $permissions[$key]['value'];
                switch($permissions[$key]['type']) {
                    case "1":
                        switch($key) {
                            case "edit_btn":
                                if ($permission < 2) {
                                    $element->disabled = true;
                                }
                                break;
                            case "create_btn":
                            case "delete_btn":
                                if ($permission < 3) {
                                    $element->disabled = true;
                                }
                                break;
                            default:
                                switch ($permission) {
                                    case false:
                                        $element->outertext = '';
                                        break;
                                    case '1':
                                        if ($inputs = $element->find('input')) {
                                            foreach($inputs as $input) {
                                                $input->disabled = true;
                                            }
                                        } elseif ($selects = $element->find('select')) {
                                            foreach($selects as $select) {
                                                $select->disabled = true;
                                            }
                                        } elseif ($textareas = $element->find('textarea')) {
                                            foreach($textareas as $textarea) {
                                                $textarea->readonly = true;
                                            }
                                        }
                                        break;
                                }
                                break;
                        }
                        break;
                    case '2':
                        switch ($permission) {
                            case false:
                                $element->outertext = '';
                                foreach($content->find('[data-element-tab=' . $key . ']') as $tab) {
                                    $tab->outertext = '';
                                }
                                break;
                            case '1':
                                foreach($element->find('[data-element]') as $tab_element) {
                                    $tab_element_key = $tab_element->attr['data-element'] ;
                                    if ($inputs = $tab_element->find('input')) {
                                        foreach($inputs as $input) {
                                            $input->disabled = true;
                                        }
                                    } elseif ($selects = $tab_element->find('select')) {
                                        foreach($selects as $select) {
                                            $select->disabled = true;
                                        }
                                    } elseif ($textareas = $tab_element->find('textarea')) {
                                        foreach($textareas as $textarea) {
                                            $textarea->readonly = true;
                                        }
                                    }
                                    switch($tab_element_key) {
                                        case "edit_btn":
                                            $tab_element->disabled = true;
                                            break;
                                        case "delete_btn":
                                        case "create_btn":
                                            $tab_element->disabled = true;
                                            break;
                                    }
                                }
                                break;
                            case '2':
                                foreach($element->find('[data-element=create_btn]') as $create_btn) {
                                    $create_btn->disabled = true;
                                }
                                foreach($element->find('[data-element=delete_btn]') as $create_btn) {
                                    $create_btn->disabled = true;
                                }
                                break;
                        }
                        break;
                }

            }
            echo $content;
        }
        if($this->footer !== false) {
            require_once(!$this->footer ? ROOT_DIR . 'templates' . DS . 'footer.php' : ROOT_DIR . 'templates' . DS . $this->footer . '.php');
        }
        if($this->system_footer !== false) {
            require_once(!$this->system_footer ? ROOT_DIR . 'templates' . DS . 'system_footer.php' : ROOT_DIR . 'templates' . DS . $this->system_footer . '.php');
        }
    }

    protected function view_only($template)
    {
        $this->render('log', registry::get('log'));
        $template_file = ROOT_DIR . 'templates' . DS . $template . '.php';
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
            if($user = $this->model('user_management')->getByFields(array(
                'user_id' => $_SESSION['user']['user_id'],
                'user_name' => $_SESSION['user']['user_name'],
                'user_passw' => $_SESSION['user']['user_passw']
            ))) {
                $user['fi_user_name'] = $_SESSION['FI_Username'];
                $user['fi_user_group'] = $_SESSION['FI_UserGroup'];
                $user['fi_user_avatar'] = $_SESSION['FI_UserAvatar'];
                $user['fi_user_id'] = $_SESSION['FI_UserId'];
                $user['fi_user_password'] = $_SESSION['FileRun']['PASSWORD'];
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
     * @param string $user
     * @param string $password
     * @param bool $remember
     * @return bool
     */

    protected function auth($user, $password, $remember = false)
    {
        if(!$password) return false;
        if($user = $this->model('user_management')->getByFields(array(
            'user_name' => $user,
            'user_passw' => $password
        ))) {
            if(!$remember) {
                $_SESSION['user']['user_id'] = $user['user_id'];
                $_SESSION['user']['user_name'] = $user['user_name'];
                $_SESSION['user']['user_passw'] = $user['user_passw'];
                $_SESSION['auth'] = 1;
                //////////
                $_SESSION['FI_Username'] = $user['user_name'];
                $_SESSION['FI_UserGroup'] = $user['user_group'];
                $_SESSION['FI_UserAvatar'] = ($user['user_avatar']!="") ? $user['user_avatar'] : "../../assets/admin/layout/img/avatar.png";
                $_SESSION['FI_UserId'] = $user['user_id'];
                $_SESSION['FileRun']['username'] = $user['user_name'];
                $_SESSION['FileRun']['PASSWORD'] = $user['user_passw'];
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
        unset($_SESSION['FI_Username']);
        unset($_SESSION['FI_UserGroup']);
        unset($_SESSION['FI_UserAvatar']);
        unset($_SESSION['FI_UserId']);
        unset($_SESSION['FileRun']);
    }

    /**
     * @param $lng
     * @return mixed
     */

    public function multilingual($lng)
    {
        $model = new default_model('multilingual');
        $row =  $model->getAll();
        return $row['multilingual_'.$lng];
    }

    private function sidebar()
    {
        $system_route = trim($_REQUEST['route'], '/');
        $tmp = $this->model('system_route_user_group_relations')->getByField('user_group_id', registry::get('user')['user_group_id'], true);
        $permissions = [];
        foreach($tmp as $v) {
            $permissions[$v['system_route_id']] = $v['relation'];
        }
        $sidebar = [];
        $tmp = $this->model('system_route')->getAll('position');
        $permit_page = false;
        foreach($tmp as $v) {
            if(!$v['parent']) {
                foreach($v as $key => $val) {
                    if($permissions[$v['system_route_id']]) {
                        if($v['route'] == $system_route) {
                            $permit_page = true;
                            registry::set('page_permissions', $permissions[$v['system_route_id']]);
                        }
                        if(!$v['hidden']) {
                            $sidebar[$v['system_route_id']][$key] = $val;
                        }
                    }
                }
            } else {
                foreach($v as $key => $val) {
                    if($permissions[$v['system_route_id']]) {
                        if($v['route'] == $system_route) {
                            $permit_page = true;
                            registry::set('page_permission', $permissions[$v['system_route_id']]);
                        }
                        if(!$v['hidden']) {
                            $sidebar[$v['parent']]['children'][$v['system_route_id']][$key] = $val;
                        }
                    }
                }
            }
        }
        if(!$permit_page) {
            require_once(TEMPLATE_DIR . 'access_denied.php');
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
        $res = $this->model('default')->getFilteredData($params, 'clients c');
        if($print) {
            print_r($res);
        }
        $rows['aaData'] = $res['rows'];
        $rows['iTotalRecords'] = $this->model('clients')->countByField();
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