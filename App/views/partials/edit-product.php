<?php
$cate = match ($product->category_id) {
    1 => "Đồ điện tử",
    2 => "Thời trang",
    3 => "Gia dụng",
    default => "Chưa có danh mục"
};
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
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-featured-product-shot.jpg" alt="Model wearing light green backpack with black canvas straps and front zipper pouch." class="h-full w-full object-cover object-center">
            </div>
        </div>

        <!-- Product form -->
        <div class="mt-10 lg:col-start-1 lg:row-start-2 lg:max-w-lg lg:self-start">
            <section aria-labelledby="options-heading">
                <h2 id="options-heading" class="sr-only">Product options</h2>

                <hr class="mb-10">
                <div class="">
                    <!-- Product form -->
                    <?php if (isset($errors)): ?>
                        <?php foreach ($errors as $error):?> 
                            <div class="message bg-red-100 my-3"><?=$error?></div>
                        <?php endforeach;?>
                    <?php endif; ?>
                    <div class="mx-auto bg-white rounded">
                        <h1 class="text-2xl font-bold mb-4">Edit Product</h1>
                        <form action="/listings/<?= $product->id ?>" method="POST">
                            <input type="hidden" name="_method" value="PUT"> <!-- Replace 1 with actual product ID -->
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Tên sản phẩm</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter product name" name="name" value="<?= $product->name ?>"> <!-- Replace "Product Name" with actual product name -->
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Giá</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" type="number" min="1" step=".01" placeholder="Enter price" name="price" value="<?= $product->price ?>"> <!-- Replace "100.00" with actual price -->
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="picture">Link ảnh</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="picture" type="text" placeholder="Enter picture URL" name="picture" value="<?= $product->picture ?>"> <!-- Replace "https://example.com/image.jpg" with actual picture URL -->
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="status">Trạng thái</label>
                                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="status" name="status">
                                    <option <?= $product->status === 1 ? 'selected="selected"' : '' ?> value="1">Còn hàng</option>
                                    <option <?= $product->status === 2 ? 'selected="selected"' : '' ?> value="2">Hết hàng</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Mô tả</label>
                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" placeholder="Enter description" name="description"><?= $product->description ?></textarea> <!-- Replace "Product description" with actual description -->
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">Danh mục</label>
                                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="category" name="category_id">
                                    <!-- <option disabled selected value="">Danh mục</option> -->
                                    <option <?= $product->category_id === 1 ? 'selected="selected"' : '' ?> value="1">Đồ điện tử</option>
                                    <option <?= $product->category_id === 2 ? 'selected="selected"' : '' ?> value="2">Thời trang</option>
                                    <option <?= $product->category_id === 3 ? 'selected="selected"' : '' ?> value="3">Gia dụng</option>
                                </select>
                            </div>
                            <div class="flex items-center justify-between">
                                <button class="w-full bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Cập nhật sản phẩm</button>
                            </div>
                            <div class="flex items-center justify-between mt-3">
                                <a href="/listings/<?= $product->id?>" class="text-center w-full border-indigo-600 bg-gray-100 text-indigo-600 hover:bg-indigo-700 hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

</div>