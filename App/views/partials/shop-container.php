<?php
// Số sản phẩm trên mỗi trang
$productsPerPage = 9;

// Tính toán số trang
$totalPages = ceil(count($products) / $productsPerPage);

// Xác định trang hiện tại
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentPage = max(1, min($_GET['page'], $totalPages));
} else {
    $currentPage = 1;
}

// Tính chỉ số bắt đầu của sản phẩm trên trang hiện tại
$startIndex = ($currentPage - 1) * $productsPerPage;

// Lấy danh sách sản phẩm cho trang hiện tại
$currentPageProducts = array_slice($products, $startIndex, $productsPerPage);
?>

<section aria-labelledby="collection-heading" class="mx-auto max-w-xl px-4 pt-24 sm:px-6 sm:pt-32 lg:max-w-7xl lg:px-8" id="store">
    <h2 id="collection-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by Collection</h2>
    <p class="mt-4 text-base text-gray-500">Each season, we collaborate with world-class designers to create a collection inspired by the natural world.</p>

    <div class="mt-10 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
        <?php foreach ($currentPageProducts as $product): ?>
            <?= loadPartial("shop-card", ['product' => $product]); ?>
        <?php endforeach; ?>
    </div>

    <!-- Phân trang -->
    <div class="mt-10 flex justify-center">
        <?php if ($totalPages > 1): ?>
            <nav class="flex" aria-label="Pagination">
                <?php if ($currentPage > 1): ?>
                    <a href="?page=<?= $currentPage - 1 ?>" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                        Previous
                    </a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <a href="?page=<?= $i ?>" class="<?= $i === $currentPage ? 'bg-gray-200' : 'bg-white' ?> relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 border border-gray-300 hover:bg-gray-50">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>

                <?php if ($currentPage < $totalPages): ?>
                    <a href="?page=<?= $currentPage + 1 ?>" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                        Next
                    </a>
                <?php endif; ?>
            </nav>
        <?php endif; ?>
    </div>
</section>
