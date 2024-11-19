<?php

namespace App\Controllers;

use App\Models\Dashboard;

class DashboardController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Dashboard();
    }

    public function order()
    {
        $users = $this->model->loadOrder();
        loadView("dashboard/index", [
            'users' => $users
        ]);
    }

    public function detail_order($params)
    {
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id
        ];

        $user = $this->model->detailOrder($params);

        // Kiểm tra nếu người dùng tồn tại
        if (!$user) {
            ErrorController::notFound('Không tìm thấy đơn hàng');
            return;
        }

        loadView('dashboard/detail_user', [
            'user' => $user
        ]);
    }

    public function destroy_order($params)
    {
        $id = $params['id'];

        $params = [
            'id' => $id
        ];

        $this->model->deleteOrder($params);

        //Set flash message
        $_SESSION['success_message'] = 'Xóa thành công';

        redirect('/dashboard');
    }

    public function edit_order($params)
    {
        $id = $params['id'] ?? '';

        $params = ['id' => $id];

        $user = $this->model->loadOrderDetails($params);
        if (!$user) {
            ErrorController::notFound('Không tìm thấy đơn hàng');
            return;
        }

        loadView('dashboard/edit', [
            'user' => $user
        ]);
    }

    public function update_order($params)
    {
        $id = $params['id'] ?? '';

        $status = $_POST['status'] ?? '';

        $params = [
            'id' => $id,
            'status' => $status
        ];

        $this->model->updateStatusOrder($params);

        $_SESSION["success_message"] = "Cập nhật sản phẩm thành công";

        redirect('/dashboard');
    }

    public function products()
    {
        $products = $this->model->loadProduct();
        loadView("dashboard/products", [
            'products' => $products
        ]);
    }

    /**
     * Search order
     */
    public function search()
    {
        $user = $_GET['user'] ?? '';

        $params = [
            'user' => "%{$user}%",
        ];

        $users = $this->model->searchOrders($params);

        loadView("dashboard/index", [
            'users' => $users
        ]);
    }

    public function products_search()
    {

        $items = $_GET['items'] ?? '';

        $params = [
            'items' => "%{$items}%",
        ];

        $products = $this->model->searchProducts($params);

        loadView("dashboard/products", [
            'products' => $products
        ]);
    }
}
