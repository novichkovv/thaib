<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 08.09.2016
 * Time: 15:20
 */
class address_controller extends controller
{
    public function index()
    {
        $this->view('address' . DS . 'index');
    }

    public function index_na()
    {
        $this->index();
    }
}