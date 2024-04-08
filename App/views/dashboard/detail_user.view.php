<?php
    $color = match ($user->status) {
        "Chưa xử lý" => 'red',
        "Đang giao hàng" => 'yellow',
        "Đã giao hàng" => 'green',
        default => 'green'
    }
?>
<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>


<div class="container mx-auto py-8 bg-gray-100 pt-28">
    <h1 class="text-2xl font-semibold text-center text-gray-800 mb-4">Quản lý đơn hàng</h1>
    <div class="flex flex-wrap justify-center -mx-4">
        <div class="w-full md:w-1/2 px-4 mb-4">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="px-6 py-4">
                    <h2 class="text-lg font-semibold text-gray-800">Thông tin đơn hàng</h2>
                    <p class="text-sm text-gray-600 mt-2">Tên khách hàng: <?= $user->fullname?></p>
                    <p class="text-sm text-gray-600">Địa chỉ: <?= $user->address?></p>
                    <p class="text-sm text-gray-600">Số điện thoại: <?= $user->phone_number?></p>
                    <p class="text-sm text-gray-600">Tên sản phẩm: <?= $user->name?></p>
                    <p class="text-sm text-gray-600">Số lượng: <?= $user->number_of_products?></p>
                    <p class="text-sm text-gray-600">Trạng thái: <span class="font-semibold text-<?=$color?>-600"><?= $user->status?></span></p>
                </div>
                <form method="post" action="/dashboard/<?=$user->id?>" class="px-6 py-4 border-t border-gray-200 text-center">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">Xóa hóa đơn</button>
                </form>
            </div>
        </div>
    </div>
</div>
