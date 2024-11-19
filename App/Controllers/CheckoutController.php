<?php

namespace App\Controllers;

use Framework_Tu_Code\Session;
use App\Models\CheckOut;

class CheckoutController
{
    protected $model;

    public function __construct()
    {
        $this->model = new CheckOut();
    }

    public function index()
    {
        $id = Session::get('user')['id'];
        $in4 = $this->model->getUserByID($id);
        loadView("checkout/index", [
            'in4' => $in4,
        ]);
    }

    public function cart()
    {
        // Khởi tạo giỏ hàng nếu chưa tồn tại trong session

        if (isset($_POST['cart'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $picture = $_POST['picture'];
            $quantity = 1; // Số lượng sản phẩm được thêm vào giỏ hàng

            // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
            $cart = Session::get('cart');
            $found = false;
            foreach ($cart as &$item) {
                if ($item['name'] === $name) {
                    // Nếu sản phẩm đã tồn tại, cập nhật số lượng và giá
                    $item['quantity'] += $quantity;
                    $item['total'] += $price * $quantity;
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                // Nếu sản phẩm chưa tồn tại, thêm vào giỏ hàng
                $cart[] = [
                    'name' => $name,
                    'price' => $price,
                    'quantity' => $quantity,
                    'picture' => $picture,
                    'total' => $price * $quantity
                ];
            }

            // Cập nhật giỏ hàng trong session
            Session::set('cart', $cart);

            redirect('/listings');
        }
    }

    public function delete()
    {
        if (isset($_POST['remove_from_cart'])) {
            $remove_index = $_POST['remove_from_cart'];
            $cart = Session::get('cart');

            // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
            if (array_key_exists($remove_index, $cart)) {
                // Xóa sản phẩm khỏi giỏ hàng
                unset($cart[$remove_index]);

                // Cập nhật giỏ hàng trong session
                Session::set('cart', $cart);
            }
        }

        redirect('/checkout');
    }

    public function store()
    {

        $user_id = Session::get('user')['id'];

        // Thực hiện thêm đơn hàng mới vào bảng orders
        $order_status = "Chưa xử lí"; // Trạng thái đơn hàng mới
        $order_total = 0; // Tính tổng tiền đơn hàng

        $param = [
            'user_id' => $user_id,
            'order_status' => $order_status,
            'order_total' => $order_total
        ];

        // Thực hiện truy vấn SQL để thêm đơn hàng mới vào bảng orders
        // $sql_insert_order = "INSERT INTO orders (user_id, status, total_money) VALUES (:user_id, :order_status, :order_total)";
        // $this->db->query($sql_insert_order, $param);
        $this->model->insertOrder($param);

        // Lấy id của đơn hàng mới nhất được tạo
        $new_order_id = $this->model->getLastInsertedID();

        // Thêm thông tin về các mặt hàng trong giỏ hàng vào bảng order_details
        $cart = Session::get('cart');

        foreach ($cart as $item) {
            $name = $item['name'];
            $param = ['name' => $name];
            $product_id = $this->model->getProductIDByName($param);
            $price = $item['price'];
            $quantity = $item['quantity'];
            $total_money = $price * $quantity;

            $params = [
                'new_order_id' => $new_order_id,
                'product_id' => $product_id->id,
                'price' => $price,
                'quantity' => $quantity,
                'total_money' => $total_money
            ];
            // inspectAndDie($params);

            // Thực hiện truy vấn SQL để thêm thông tin của mỗi mặt hàng trong giỏ hàng vào bảng order_details
            // $sql_insert_order_details =
            //     "INSERT INTO order_details (order_id, product_id, price, number_of_products, total_money) 
            // VALUES (:new_order_id, :product_id, :price, :quantity, :total_money)";
            // $this->db->query($sql_insert_order_details, $params);
            $this->model->insertOrderDetails($params);

            // Cập nhật tổng tiền cho đơn hàng
            $order_total += $total_money;
        }

        $param = [
            'order_total' => $order_total + 16,
            'new_order_id' => $new_order_id
        ];
        // $sql_update_order_total = "UPDATE orders SET total_money = :order_total WHERE id = :new_order_id";
        // $this->db->query($sql_update_order_total, $param);
        $this->model->updateMoneyOrder($param);

        Session::clear('cart');
        redirect('/dashboard');
    }
}
