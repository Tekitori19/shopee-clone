<?php

namespace App\Controllers;

use App\Models\Checkout;
use Framework_Tu_Code\Session;
use GuzzleHttp\Client;

class OnlinePaymentController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Checkout();
    }

    private function convertUSDToVND($amountInUSD)
    {
        $client = new Client();
        $response = $client->get('https://api.exchangerate-api.com/v4/latest/USD');
        $data = json_decode($response->getBody(), true);
        $rate = $data['rates']['VND'];
        $amountInVND = $amountInUSD * $rate;

        return $amountInVND;
    }

    public function index()
    {

        $cart = Session::get('cart');

        $order_total = 0; // Tính tổng tiền đơn hàng

        foreach ($cart as $item) {
            $price = $item['price'];
            $quantity = $item['quantity'];
            $total_money = $price * $quantity;

            $order_total += $total_money;
        }

        // inspectAndDie($order_total);
        if ($order_total == 0) {
            redirect('/checkout');
        }


        $config = [
            "app_id" => 2553,
            "key1" => "PcY4iZIKFCIdgZvA6ueMcMHHUbRLYjPL",
            "key2" => "kLtgPl8HHhfvMuDHPwKfgfsY4Ydm9eIz",
            "endpoint" => "https://sb-openapi.zalopay.vn/v2/create"
        ];

        $embeddata = json_encode(["redirecturl" => "http://shopee-clone.test/checkout/success"]); // Merchant's data
        $items = '[]'; // Merchant's data
        $transID = rand(0, 1000000); //Random trans id
        $order = [
            "app_id" => $config["app_id"],
            "app_time" => round(microtime(true) * 1000), // miliseconds
            "app_trans_id" => date("ymd") . "_" . $transID, // translation missing: vi.docs.shared.sample_code.comments.app_trans_id
            "app_user" => "user123",
            "item" => $items,
            "embed_data" => $embeddata,
            "amount" => round($this->convertUSDToVND($order_total + 16)),
            "description" => "Shop BEE - Payment for the order #$transID",
            "bank_code" => "",
            "callback_url" => "http://shopee-clone.test/checkout/zalo-pay/callback",
        ];

        // appid|app_trans_id|appuser|amount|apptime|embeddata|item
        $data = $order["app_id"] . "|" . $order["app_trans_id"] . "|" . $order["app_user"] . "|" . $order["amount"]
            . "|" . $order["app_time"] . "|" . $order["embed_data"] . "|" . $order["item"];
        $order["mac"] = hash_hmac("sha256", $data, $config["key1"]);

        $context = stream_context_create([
            "http" => [
                "header" => "Content-type: application/x-www-form-urlencoded\r\n",
                "method" => "POST",
                "content" => http_build_query($order)
            ]
        ]);

        $resp = file_get_contents($config["endpoint"], false, $context);
        $result = json_decode($resp, true);

        redirect($result['order_url']);
        inspectAndDie($result);
        if ($result['return_code'] == 1) {
            redirect("/checkout/success");
        }
    }

    public function callback()
    {
        $result = [];

        try {
            $key2 = "kLtgPl8HHhfvMuDHPwKfgfsY4Ydm9eIz";
            $postdata = file_get_contents('php://input');
            $postdatajson = json_decode($postdata, true);
            $mac = hash_hmac("sha256", $postdatajson["data"], $key2);

            $requestmac = $postdatajson["mac"];

            // kiểm tra callback hợp lệ (đến từ ZaloPay server)
            if (strcmp($mac, $requestmac) != 0) {
                // callback không hợp lệ
                $result["return_code"] = -1;
                $result["return_message"] = "mac not equal";
            } else {
                error_log("success", 3, 'D:\\laragon\\www\\shopee-clone\\logs\\my-errors.log');

                // thanh toán thành công
                // merchant cập nhật trạng thái cho đơn hàng
                $datajson = json_decode($postdatajson["data"], true);
                // echo "update order's status = success where app_trans_id = ". $dataJson["app_trans_id"];

                $result["return_code"] = 1;
                $result["return_message"] = "success";
            }
        } catch (\Exception $e) {
            $result["return_code"] = 0; // ZaloPay server sẽ callback lại (tối đa 3 lần)
            $result["return_message"] = $e->getMessage();
        }

        // thông báo kết quả cho ZaloPay server
        echo json_encode($result);
    }

    public function order_status()
    {
        echo "Payment success!";
    }
}
