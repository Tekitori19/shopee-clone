<?= loadPartial("head"); ?>
<?= loadPartial("navbar"); ?>
<div class="container w-[1000px] mx-auto py-4">
    <h1 class="text-2xl font-bold mb-4 text-center text-blue-600">Lịch sử đơn hàng</h1>
    <?php if (empty($orders)): ?>
        <p class="text-center text-gray-500">Bạn chưa có đơn hàng nào</p>
    <?php endif; ?>
    <div class="space-y-4">
        <?php foreach ($orders as $order): ?>
            <div class="bg-blue-100 rounded-md shadow-md p-4">
                <div class="flex justify-between items-center mb-3">
                    <h2 class="text-base font-semibold">Đơn hàng #<?= $order->order_id; ?></h2>
                    <span class="text-sm text-gray-500">
                        Giao hàng thành công | 
                        <span class="text-red-500 font-semibold"><?= $order->status; ?></span>
                    </span>
                </div>
                <div class="grid grid-cols-3 gap-3">
                    <!-- Product Image -->
                    <div>
                        <img src="<?= $order->product_picture; ?>" alt="<?= $order->product_name; ?>" class="w-20 h-20 rounded-md object-cover">
                    </div>
                    <!-- Order Details -->
                    <div class="col-span-2">
                        <p class="text-sm mb-1"><strong>Sản phẩm:</strong> <?= $order->product_name; ?> x<?= $order->number_of_products; ?></p>
                        <p class="text-sm mb-1"><strong>Ngày đặt:</strong> <?= date("d/m/Y", strtotime($order->order_date)); ?></p>
                        <p class="text-sm mb-1"><strong>Nhận hàng:</strong> 
                            <?php if (!empty($order->delivery_date)): ?>
                                <?= date("d/m/Y", strtotime($order->delivery_date)); ?>
                            <?php else: ?>
                                <span class="text-gray-500">Chưa cập nhật</span>
                            <?php endif; ?>
                        </p>
                        <p class="text-sm mb-1"><strong>Giá:</strong> <?= number_format($order->product_price); ?> $</p>
                    </div>
                </div>
                <div class="border-t border-gray-300 mt-3 pt-2 flex justify-between items-center">
                    <p class="text-lg font-bold text-black">Tổng cộng: <?= number_format($order->order_total); ?> $</p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
