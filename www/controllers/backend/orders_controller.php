<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 09.09.2016
 * Time: 12:16
 */
class orders_controller extends controller
{
    public function index()
    {
        $this->view('orders' . DS . 'index');
    }

    public function index_ajax()
    {
        switch ($_REQUEST['action']) {
            case "get_orders":
                $params = [];
                $params['table'] = 'orders o';
                $params['select'] = [
                    'o.id',
                    'p.product_name',
                    'o.status_id',
                    'o.create_date',
                    'o.pay_date',
                    '1'
                ];
                $params['join']['products p'] = [
                    'on' => 'p.id = o.product_id',
                ];
                echo json_encode($this->getDataTable($params));
                exit;
                break;
        }
    }
}