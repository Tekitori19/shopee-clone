<div class="mx-auto max-w-7xl pt-24 px-4 py-12 sm:px-6 lg:px-8">

<ul role="list" class="grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-3 xl:gap-x-8">
 
  <?php foreach ($products as $product): ?>
  <li class="overflow-hidden rounded-xl border border-gray-200">
    <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
      <img src="https://tailwindui.com/img/logos/48x48/reform.svg" alt="Reform" class="h-12 w-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
      <div class="text-sm font-medium leading-6 text-gray-900"><?= $product->product_name ?></div>
      <div class="relative ml-auto">
        <button type="button" class="dropdown-btn -m-2.5 block p-2.5 text-gray-400 hover:text-gray-500" id="options-menu-2-button" aria-expanded="false" aria-haspopup="true">
          <span class="sr-only">Open options</span>
          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
          </svg>
        </button>

        <!--
          Dropdown menu, show/hide based on menu state.

          Entering: "transition ease-out duration-100"
            From: "transform opacity-0 scale-95"
            To: "transform opacity-100 scale-100"
          Leaving: "transition ease-in duration-75"
            From: "transform opacity-100 scale-100"
            To: "transform opacity-0 scale-95"
        -->
        <div class="hidden absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-2-button" tabindex="-1">
          <!-- Active: "bg-gray-50", Not Active: "" -->
          <a href="/listings/<?= $product->product_id?>" class="block px-3 py-1 text-sm leading-6 text-gray-900 hover:bg-green-50" role="menuitem" tabindex="-1" id="options-menu-2-item-0">Xem<span class="sr-only">, Reform</span></a>
          <a href="/listings/edit/<?= $product->product_id?>" class="block px-3 py-1 text-sm leading-6 text-gray-900 hover:bg-green-50" role="menuitem" tabindex="-1" id="options-menu-2-item-1">Sửa<span class="sr-only">, Reform</span></a>
          <!-- DELETE FORM -->
          <form method="post" action="/listings/<?= $product->product_id?>">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit"
               class="block w-full text-left px-3 py-1 text-sm leading-6 text-gray-900 hover:bg-red-100" role="menuitem" tabindex="-1" id="options-menu-2-item-1">Xóa<span class="sr-only">, Reform</span>
            </button>
          </form>
          <!-- END DELETE FORM -->
        </div>
      </div>
    </div>
    <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
      <div class="flex justify-between gap-x-4 py-3">
        <dt class="text-gray-500">Giá bán</dt>
        <dd class="text-gray-700">$<?= $product->price?></dd>
      </div>
      <div class="flex justify-between gap-x-4 py-3">
        <dt class="text-gray-500">Doanh thu</dt>
        <dd class="flex items-start gap-x-2">
          <div class="font-medium text-gray-900">$<?= $product->total_revenue?></div>
          <?php if ( $product->status === 1):?>
          <div class="rounded-md py-1 px-2 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">Còn hàng</div>
          <?php else:?>
          <div class="rounded-md py-1 px-2 text-xs font-medium ring-1 ring-inset text-red-700 bg-red-50 ring-red-600/10">Hết hàng</div>
          <?php endif;?>
        </dd>
      </div>
    </dl>
  </li>
  <?php endforeach;?>
</ul>


</div>

<script>
    // JavaScript code here
    const dropdownBtns = document.querySelectorAll('.dropdown-btn');

    dropdownBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const dropdownMenu = btn.nextElementSibling;
            dropdownMenu.classList.toggle('hidden');
            dropdownMenu.classList.toggle('block');
        });
    });
</script>

