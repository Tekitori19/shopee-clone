<section aria-labelledby="collection-heading" class="mx-auto max-w-xl px-4 pt-24 sm:px-6 sm:pt-32 lg:max-w-7xl lg:px-8" id="store">
    <h2 id="collection-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by Collection</h2>
    <p class="mt-4 text-base text-gray-500">Each season, we collaborate with world-class designers to create a collection inspired by the natural world.</p>

    <div class="mt-10 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">

    <?php if (isset($home)): ?>
        <?php for ($i=0; $i < 3; $i++): ?>
            <?= loadPartial("shop-card", [
            'product' => $products[$i] 
            ]);?>
        <?php endfor; ?>
    <?php else:?>
        <?php foreach ($products as $product): ?>
            <?= loadPartial("shop-card", [
                'product' => $product
            ]);?>
        <?php endforeach;?>
    <?php endif; ?>
    </div>
</section>