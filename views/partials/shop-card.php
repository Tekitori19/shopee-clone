<?php
    // inspect($product);
    //<?= $product->picture
    //"https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
?>

<div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
        <img
         src= "https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
         class="h-full w-full object-cover object-center sm:h-full sm:w-full">
    </div>
    <div class="flex flex-1 flex-col space-y-2 p-4">
        <h3 class="text-sm font-medium text-gray-900">
            <a href="javascript:void(0)">
                <span aria-hidden="true" class="absolute inset-0"></span>
                <?= $product->name?>
            </a>
        </h3>
        <p class="text-sm text-gray-500"><?=$product->description?></p>
        <div class="flex flex-1 flex-col justify-end">
            <p class="text-sm italic text-gray-500"><?=$product->category_id===1 ? 'Đồ điện tử': 'Thời trang và gia dụng'?></p>
            <p class="text-base font-medium text-gray-900">$<?=$product->price?></p>
        </div>
    </div>
    <button class="z-0 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:outline-none mx-2 my-2 bg-white transition duration-150 ease-in-out hover:border-indigo-600 hover:bg-gray-100 hover:text-gray-600 rounded border border-gray-600 text-gray-500 px-8 py-3 text-sm leading-6">
        Thêm vào giỏ hàng
    </button>
</div>