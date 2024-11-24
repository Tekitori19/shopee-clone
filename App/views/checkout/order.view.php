<?= loadPartial("head"); ?>
<?= loadPartial("navbar"); ?>

<div class="container mx-auto py-8 pt-28">
    <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">lịch sử đơn hàng</h1>
    <?php if (empty($orders)): ?>
        <p class="text-center text-gray-500">bạn chưa có đơn hàng nào</p>
    <?php endif; ?>
    <div class="grid grid-cols-2 gap-4">
        <?php foreach ($orders as $order): ?>
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-blue-500">đơn hàng #<?= $order->order_id; ?></h2>
                    <span class="text-sm text-gray-500"><?= date("d/m/Y", strtotime($order->order_date)); ?></span>
                </div>
                <div class="grid grid-cols-2 mb-6">
                    <div class="flex flex-col items-start justify-center">
                        <p class="mb-2"><strong>trạng thái:</strong> <span class="text-gray-700"><?= $order->status; ?></span></p>
                        <p class="mb-2"><strong>tổng tiền:</strong> <span class="text-gray-700"><?= number_format($order->order_total, 2); ?> vnd</span></p>
                        <p class="mb-2"><strong>địa chỉ:</strong> <span class="text-gray-700"><?= $order->user_address; ?></span></p>
                        <p class="mb-2"><strong>số điện thoại:</strong> <span class="text-gray-700"><?= $order->user_phone; ?></span></p>
                    </div>
                    <div>
                        <img src="<?= $order->product_picture; ?>" alt="<?= $order->product_name; ?>" class=" object-cover rounded-lg">
                    </div>
                </div>
                <div class="border-t border-gray-200 pt-4">
                    <h3 class="text-lg font-semibold mt-4 mb-2 text-blue-500">chi tiết sản phẩm:</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="mb-2"><strong>tên sản phẩm:</strong> <span class="text-gray-700"><?= $order->product_name; ?></span></p>
                            <p class="mb-2"><strong>giá:</strong> <span class="text-gray-700"><?= number_format($order->product_price, 2); ?> vnd</span></p>
                        </div>
                        <div>
                            <p class="mb-2"><strong>số lượng:</strong> <span class="text-gray-700"><?= $order->number_of_products; ?></span></p>
                            <p class="mb-2"><strong>thành tiền:</strong> <span class="text-gray-700"><?= number_format($order->product_total, 2); ?> vnd</span></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
