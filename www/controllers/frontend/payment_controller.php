<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 08.09.2016
 * Time: 13:21
 */
class payment_controller extends controller
{
    public function index()
    {
        if(isset($_POST['pay_btn'])) {
            $params = [
                'intent' => 'sale',
                'payer' => [
                    "payment_method" => "credit_card",
                    "funding_instruments" => [
                        [
                            'credit_card' => [
                                'number' => $_POST['cc_number'],
                                'type' => 'visa',
                                "expire_month" => $_POST['cc_month'],
                                "expire_year" => '20' . $_POST['cc_year'],
                                "cvv2" => $_POST['cc_cvv'],
                                "first_name" => array_shift(explode(' ', $_POST['cc_name'])),
                                "last_name" => array_pop(explode(' ', $_POST['cc_name'])),
                            ]
                        ]
                    ]
                ],
                'transactions' => [
                    [
                        "amount" => [
                            "total" => "7.47",
                            "currency" => "USD",
                            "details" => [
                                "subtotal" => "7.41",
                                "tax" => "0.03",
                                "shipping" => "0.03"
                             ]
                        ],
                        'description' => 1111
                    ]
                ]
            ];
            $api = new paypal_api_class();
            $api->sendPaymentRequest($params);
        }
        $this->view_only('payment' . DS . 'form');
    }

    public function index_na()
    {
        $this->index();
    }
}