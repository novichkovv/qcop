<?php
/**
 * Created by PhpStorm.
 * User: enovichkov
 * Date: 25.05.2015
 * Time: 17:32
 */
class user_base_controller extends controller
{
    public function index()
    {

    }

    public function index_na()
    {
        Header('Content-Type: text/html; charset=utf-8');
        set_time_limit(0);
        require_once(ROOT_DIR . 'classes' . DS . 'simple_html_dom_class.php');
        $base_url = 'http://my.mail.ru';
        $users = $this->model('user_base')->getByField('used', '0', true, 'create_date', '20');
        if(!$users) {
            $this->writeLog('PARSER_ERRORS', 'No data to parse');
            tools_class::mail('Mail Parser error', 'No data to parse', 'novichkovv@bk.ru');
        }
        foreach ($users as $user) {
            $html = file_get_html($base_url . $user['mail_url']);
            if(!$html) {
                $user['used'] = 1;
                $this->model('user_base')->insert($user);
                exit;
            }
            $friends = $html->find('.mm_friends_list_user');
            $date = date('Y-m-d H:i:s');
            foreach ($friends as $friend) {
                $url = $friend->href;
                $arr = explode('/', trim($url, '/'));
                $email = $arr[1] . '@' . $arr[0] . '.ru';
                $name = $friend->find('span')[0]->innertext;
                $arr = explode('<br />', $name);
                $first_name = $arr[0];
                $last_name = $arr[1];
                $row = [];
                if(!$this->model('user_base')->getByField('email', $friend->attr['data-email'])) {
                    if(!$email || ! $url) {
                        continue;
                    }
//                    if($last_name) {
//                        $ending = $last_name[strlen($last_name - 2)] . $last_name[strlen($last_name - 1)];
//                        if(in_array($ending, array('ев', 'ов', 'ин', 'ий'))) {
//                            $row['gender'] = 1;
//                        } elseif(in_array($ending, array('ва', 'на', 'ая'))) {
//                            $row['gender'] = 2;
//                        } else {
//                            $row['gender'] = 0;
//                        }
//                    }
                    $row['email'] = $email;
                    $row['mail_url'] = $url;
                    $row['user_name'] = $first_name ? $first_name : '';
                    $row['user_surname'] = $last_name ? $last_name : '';
                    $row['create_date'] = $date;
                    $this->model('user_base')->insert($row);
                }
            }
            $this->model('user_base')->insert(array('id' => $user['id'], 'used' => 1));
            sleep(2);
        }


    }
}