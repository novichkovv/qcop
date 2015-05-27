<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 25.05.2015
 * Time: 1:19
 */
class index_controller extends controller
{
    public function index()
    {

    }

    public function index_na()
    {
        tools_class::mail('Test', 'Test', 'novichkov');
        $this->view('index_na');
    }
}