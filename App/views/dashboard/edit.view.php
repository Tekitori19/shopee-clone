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
                    <p class="text-sm text-gray-600">Tổng tiền: <b><?= $user->total_money?>$</b></p>
                    <p class="text-sm text-gray-600">Trạng thái: <span class="font-semibold text-<?=$color?>-600"><?= $user->status?></span></p>
                    <form method="post" action="/dashboard/<?=$user->order_id?>" class="mt-4">
                        <input type="hidden" name="_method" value="PUT">
                        <label for="status" class="block text-sm font-medium text-gray-700">Chọn trạng thái mới</label>
                        <select id="status" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="Chưa xử lý">Chưa xử lý</option>
                            <option value="Đang giao hàng">Đang giao hàng</option>
                            <option value="Đã giao hàng">Đã giao hàng</option>
                        </select>
                        <div class="px-6 py-4 border-t border-gray-200 text-center">
                            <button id="updateStatusBtn" type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Cập nhật trạng thái</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-8 rounded-lg shadow-md">
        <p class="text-lg font-semibold text-gray-800 mb-4">Thông báo</p>
        <p id="modal-message" class="text-gray-600"></p>
        <div class="mt-6">
            <button id="modalCloseBtn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Đóng</button>
        </div>
    </div>
</div>

<script>
    document.getElementById('updateStatusBtn').addEventListener('click', function() {
        var status = document.getElementById('status').value;
        // Hiển thị modal
        var modal = document.getElementById('modal');
        modal.classList.remove('hidden');
        // Hiển thị thông báo trong modal
        var message = document.getElementById('modal-message');
        message.textContent = 'Đã cập nhật trạng thái đơn hàng thành công!';
    });

    // Đóng modal khi nhấn vào nút Đóng
    document.getElementById('modalCloseBtn').addEventListener('click', function() {
        var modal = document.getElementById('modal');
        modal.classList.add('hidden');
    });
</script>
