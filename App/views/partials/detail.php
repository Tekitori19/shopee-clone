<?php

use Framework_Tu_Code\Session;

$cate = match ($product->category_id) {
    1 => "Đồ điện tử",
    2 => "Thời trang",
    3 => "Gia dụng",
    default => "Chưa có danh mục"
};
// inspect($product);
?>

<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
        <!-- Product details -->
        <div class="lg:max-w-lg lg:self-end">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-2">
                    <li>
                        <div class="flex items-center text-sm">
                            <a href="/listings" class="font-medium text-gray-500 hover:text-gray-900">Shop</a>
                            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="ml-2 h-5 w-5 flex-shrink-0 text-gray-300">
                                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"></path>
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center text-sm">
                            <a href="javascript:void(0)" class="font-medium text-gray-500 hover:text-gray-900"><?= $cate ?></a>
                        </div>
                    </li>

                </ol>
            </nav>

            <div class="mt-4">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?= $product->name ?></h1>
                <?= loadPartial("message") ?>
            </div>

            <section aria-labelledby="information-heading" class="mt-4">
                <h2 id="information-heading" class="sr-only">Product information</h2>

                <div class="flex items-center">
                    <p class="text-lg text-gray-900 sm:text-xl">$<?= $product->price ?></p>

                    <div class="ml-4 border-l border-gray-300 pl-4">
                        <h2 class="sr-only">Reviews</h2>
                        <div class="flex items-center">
                            <div>
                                <div class="flex items-center">
                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                    </svg>
                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                    </svg>
                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                    </svg>
                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                    </svg>
                                    <svg class="text-gray-300 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                    </svg>

                                </div>
                                <p class="sr-only">4 out of 5 stars</p>
                            </div>
                            <p class="ml-2 text-sm text-gray-500">1624 reviews</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 space-y-6">
                    <p class="text-base text-gray-500"><?= $product->description ?></p>
                </div>

                <div class="mt-6 flex items-center">
                    <?php if ($product->status === 1) : ?>
                        <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
                        </svg>
                        <p class="ml-2 text-sm text-gray-500">Còn hàng</p>
                    <?php else : ?>
                        <svg class="h-5 w-5 flex-shrink-0 text-red-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M6.707 7.293a1 1 0 00-1.414 1.414L8.586 12 5.293 15.293a1 1 0 101.414 1.414L10 13.414l3.293 3.293a1 1 0 001.414-1.414L11.414 12l3.293-3.293a1 1 0 00-1.414-1.414L10 10.586 6.707 7.293z" clip-rule="evenodd"></path>
                        </svg>
                        <p class="ml-2 text-sm text-gray-500">Hết hàng</p>
                    <?php endif; ?>
                </div>
            </section>
        </div>

        <!-- Product image -->
        <div class="mt-10 lg:col-start-2 lg:row-span-2 lg:mt-0 lg:self-center">
            <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg">
                <img src="<?= strlen($product->picture) !== 0 ? $product->picture : 'https://tailwindui.com/img/ecommerce-images/product-page-04-featured-product-shot.jpg'?>" class="h-full w-full object-cover object-center">
            </div>
        </div>

        <!-- Product form -->
        <div class="mt-10 lg:col-start-1 lg:row-start-2 lg:max-w-lg lg:self-start">
            <section aria-labelledby="options-heading">
                <h2 id="options-heading" class="sr-only">Product options</h2>

                <form method="post" action="/checkout">

                    <div class="mt-1">
                            <input type="hidden" name="picture" value="<?= $product->picture ?>">
                            <input type="hidden" name="name" value="<?= $product->name ?>">
                            <input type="hidden" name="price" value="<?= $product->price ?>">
                            <button type="submit" name="cart" <?= $product->status !== 1? 'disabled': ''?> class="<?= $product->status == 1 ? 'hover:border-indigo-600 hover:bg-gray-100 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50' : 'cursor-not-allowed' ?> flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white ">
                                <?php if ($product->status == 1) : ?>
                                    Thêm vào giỏ hàng
                                <?php else : ?>
                                    <span class="text-red-400">Sản phẩm tạm hết hàng</span>
                                <?php endif; ?>
                            </button>
                        
                        <?php if (Session::has('user') && Session::get('user')['role'] === 1) : ?>
                            <a href="/listings/edit/<?= $product->id ?>" class="hover:border-blue-600 mt-10 hover:bg-gray-100 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-50 flex w-full items-center justify-center rounded-md border border-transparent bg-blue-600 px-8 py-3 text-base font-medium text-white ">
                                Sửa
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="mt-6 text-center">
                        <div href="javascrip:void(0)" class="group inline-flex text-base font-medium">
                            <svg class="mr-2 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z">
                                </path>
                            </svg>
                            <span class="text-gray-500 hover:text-gray-700">Lifetime Guarantee</span>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>