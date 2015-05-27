<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 06.03.15
 * Time: 19:34
 */
if(isset($_GET['route'])) {
    $parts = explode('?', trim($_GET['route'], '\\/'));
    $arr = explode('/', $parts[0]);
    if(count($arr) === 1) {
        $controller = $arr[0];
        $action = 'index';
    } else {
        $controller = $arr[0];
        $action = $arr[1];
    }
    array_slice($arr, 2);
    unset($_GET['route']);
} else {
    $controller = 'index';
    $action = 'index';
}

/////
if(DEVELOPMENT_MODE) {
    $arr = explode('.', $_SERVER['HTTP_HOST']);
}
/////
$route_parts[0] = $controller;
$route_parts[1] = $action;
registry::set('route_parts', $route_parts);
$class_name = $controller . '_controller';
if(!file_exists(ROOT_DIR . 'controllers' . DS . PROJECT . DS . $class_name . '.php')) {
    $class_name = 'default_controller';
}
if(DEVELOPMENT_MODE && $arr[0] == 'qcop') {
    $class_name = 'default_controller';
    $action = 'dev';
}
registry::set('controller', $class_name);
$controller = new $class_name($class_name, $action);
if(!$controller->check_auth) {
    $action .= '_na';
}
if(isset($_REQUEST['ajax'])) {
    $ajax_action = $action . '_ajax';
    if(is_callable($controller->$ajax_action())) {
        $controller->$ajax_action();
    }
}
if(DEVELOPMENT_MODE && $arr[0] == 'qcop') {
    $action = 'dev';
}

if(method_exists($controller ,$action)) {
    registry::set('action', $action);
    $controller->$action();
} else {
    $controller->four_o_four();
    registry::set('action', 'four_o_four');
}