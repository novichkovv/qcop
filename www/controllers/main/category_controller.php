<?php
/**
 * Created by PhpStorm.
 * User: enovichkov
 * Date: 28.05.2015
 * Time: 14:53
 */
class category_controller extends controller
{
    public function index()
    {

    }

    public function index_na()
    {
        $this->view('category' . DS . 'index');
    }
}