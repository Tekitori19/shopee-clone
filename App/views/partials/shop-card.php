<?php

use Framework_Tu_Code\Session;

//"https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
$category = match ($product->category_id) {
    1 => 'Đồ điện tử',
    2 => 'Thời trang',
    3 => 'Gia dụng',
    default => 'Không có danh mục'
};
if (!Session::has('cart')) {
    Session::set('cart', []);
}

// var_dump($product->picture);
?>

<div class="pb-10">

    <form method="post" action="/checkout">
        <input type="hidden" name="name" value="<?= $product->name ?>">
        <input type="hidden" name="price" value="<?= $product->price ?>">
        <input type="hidden" name="picture" value="<?= $product->picture ?>">
        <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
            <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                <img
                    src="<?= strlen($product->picture) !== 0 ? $product->picture : 'https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg' ?>"
                    class="h-full w-full object-cover object-center sm:h-full sm:w-full">
            </div>
            <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                    <a href="/listings/<?= $product->id ?>">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        <strong><?= $product->name ?></strong>
                    </a>
                </h3>
                <!-- <p class="text-sm text-gray-500 "><?= $product->description ?></p> -->
                <p class="text-base text-gray-500 truncate overflow-hidden whitespace-nowrap"><?= $product->description ?></p>
                <div class="flex flex-1 flex-col justify-end">
                    <p class="text-sm italic text-gray-500"><?= $category ?></p>
                    <p class="text-base font-medium text-gray-900">$<?= $product->price ?></p>
                </div>
            </div>
            <!-- <button type="submit" name="cart" class="z-0 mx-2 my-2 bg-white transition duration-150 ease-in-out <?= $product->status === 1 ? 'hover:border-indigo-600 hover:bg-gray-100 hover:text-gray-600 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:outline-none' : 'cursor-not-allowed' ?>  rounded border border-gray-600 text-gray-500 px-8 py-3 text-sm leading-6">
                <?php //if ($product->status == 1): ?>
                    Thêm vào giỏ hàng
                <?php //else: ?>
                    <span class="text-red-400">Sản phẩm tạm hết hàng</span>
                <?php //endif; ?>
            </button> -->
            <button type="submit" name="cart" 
             onclick="thongbao()"
            class="z-0 mx-2 my-2 px-8 py-3 text-sm leading-6 rounded border 
                <?= $product->status === 1 ? 
                    'bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500' : 
                    'bg-gray-300 text-gray-500 cursor-not-allowed' ?>">
            <?php if ($product->status == 1): ?>
                Thêm vào giỏ hàng
            <?php else: ?>
                <span class="text-red-400">Sản phẩm tạm hết hàng</span>
            <?php endif; ?>
            </button>

        </div>
    </form>
</div>
<script>
function thongbao() {
    <?php if (!Session::has('user')): ?>
        
        alert("Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng!");
        window.location.href = "/login.php"; 
    <?php else: ?>
        
        alert("Sản phẩm đã được thêm vào giỏ hàng! Vui lòng xem giỏ hàng.");
    <?php endif; ?>
}
</script>
