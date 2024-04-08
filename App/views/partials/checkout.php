<?php
  $subbtotal = 0;
  foreach ($_SESSION['cart'] as $cart) {
    $subbtotal += $cart['total'];
  }

  $sumtotal = $subbtotal + 16;
?>

<main class="mx-auto max-w-7xl px-4 pb-24 pt-24 sm:px-6 lg:px-8">
  <div class="mx-auto max-w-2xl lg:max-w-none">
    <h1 class="sr-only">Checkout</h1>

    <div class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
      <div>
        <div>
          <h2 class="text-lg font-medium text-gray-900">Contact information</h2>

          <div class="mt-4">
            <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
            <div class="mt-1">
              <input type="email" id="email-address" name="email-address" autocomplete="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
          </div>
        </div>

        <div class="mt-10 border-t border-gray-200 pt-10">
          <h2 class="text-lg font-medium text-gray-900">Shipping information</h2>

          <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">

            <div class="sm:col-span-2">
              <label for="fullname" class="block text-sm font-medium text-gray-700">Tên đầy đủ</label>
              <div class="mt-1">
                <input type="text" name="fullname" id="fullname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
              <div class="mt-1">
                <input type="text" name="address" id="address" autocomplete="street-address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            <!-- </div> -->

            </div>

            <div class="sm:col-span-2">
              <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
              <div class="mt-1">
                <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
          </div>
        </div>

        <div class="mt-10 border-t border-gray-200 pt-10">
          <fieldset>
            <legend class="text-lg font-medium text-gray-900">Delivery method</legend>

            <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
              <!--
                Checked: "border-transparent", Not Checked: "border-gray-300"
                Active: "ring-2 ring-indigo-500"
              -->
              <!--
                Checked: "border-transparent", Not Checked: "border-gray-300"
                Active: "ring-2 ring-indigo-500"
              -->
              <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none">
                <input type="radio" name="delivery-method" value="Express" class="sr-only" aria-labelledby="delivery-method-1-label" aria-describedby="delivery-method-1-description-0 delivery-method-1-description-1">
                <span class="flex flex-1">
                  <span class="flex flex-col">
                    <span id="delivery-method-1-label" class="block text-sm font-medium text-gray-900">Express</span>
                    <span id="delivery-method-1-description-0" class="mt-1 flex items-center text-sm text-gray-500">2–5 business days</span>
                    <span id="delivery-method-1-description-1" class="mt-6 text-sm font-medium text-gray-900">$16.00</span>
                  </span>
                </span>
                <!-- Not Checked: "hidden" -->
                <svg class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                </svg>
                <!--
                  Active: "border", Not Active: "border-2"
                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                -->
                <span class="pointer-events-none absolute -inset-px rounded-lg border-2" aria-hidden="true"></span>
              </label>
            </div>
          </fieldset>
        </div>

        <!-- Payment -->
        <div class="mt-10 border-t border-gray-200 pt-10">
          <h2 class="text-lg font-medium text-gray-900">Payment</h2>

          <fieldset class="mt-4">
            <legend class="sr-only">Payment type</legend>
            <div class="space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0">
              <div class="flex items-center">
                <input id="credit-card" type="radio" checked class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="credit-card" class="ml-3 block text-sm font-medium text-gray-700">Thanh toán khi nhận hàng</label>
              </div>
              <div class="flex items-center">
                <input id="paypal" disabled type="radio" class="cursor-not-allowed h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="paypal" class="ml-3 block text-sm font-medium text-gray-700">PayPal <span class="text-red-500">(Bảo trì)</span></label>
              </div>
              <div class="flex items-center">
                <input id="etransfer" type="radio" disabled class="cursor-not-allowed h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="etransfer" class="ml-3 block text-sm font-medium text-gray-700">eTransfer <span class="text-red-500">(Bảo trì)</span></label>
              </div>
            </div>
          </fieldset>

          <div class="mt-6 grid grid-cols-4 gap-x-4 gap-y-6">
            <div class="col-span-4">
              <label for="card-number" class="block text-sm font-medium text-gray-700">Card number</label>
              <div class="mt-1">
                <input type="text" disabled id="card-number" name="card-number" autocomplete="cc-number" class="cursor-not-allowed block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="col-span-4">
              <label for="name-on-card" class="block text-sm font-medium text-gray-700">Name on card</label>
              <div class="mt-1">
                <input type="text" disabled id="name-on-card" name="name-on-card" autocomplete="cc-name" class="cursor-not-allowed block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="col-span-3">
              <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration date (MM/YY)</label>
              <div class="mt-1">
                <input type="text" disabled name="expiration-date" id="expiration-date" autocomplete="cc-exp" class="cursor-not-allowed block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>

            <div>
              <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
              <div class=" cursor-not-allowedmt-1">
                <input type="text" disabled name="cvc" id="cvc" autocomplete="csc" class="cursor-not-allowed block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Order summary -->
      <div class="mt-10 lg:mt-0">
        <h2 class="text-lg font-medium text-gray-900">Order summary</h2>

        <div class="mt-4 rounded-lg border border-gray-200 bg-white shadow-sm">
          <h3 class="sr-only">Items in your cart</h3>
          <ul role="list" class="divide-y divide-gray-200">
            <?php foreach ($_SESSION['cart'] as $key => $cart): ?>
              <li class="flex px-4 py-6 sm:px-6">
                
                <div class="flex-shrink-0">
                  <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-02-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-20 rounded-md">
                </div>
                <div class="ml-6 flex flex-1 flex-col">
                  <div class="flex">
                    <div class="min-w-0 flex-1">
                      <h4 class="text-sm">
                        <p class="font-medium text-gray-700 hover:text-gray-800">
                          <?= $cart['name']?>
                        </p>
                      </h4>
                    </div>
                    <form action="/checkout" method="post">
                    <div class="ml-4 flow-root flex-shrink-0">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" name="remove_from_cart" value="<?= $key ?>" class="-m-2.5 flex items-center justify-center bg-white p-2.5 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Remove</span>
                          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                    </form>
                  </div>
                  <div class="flex flex-1 items-end justify-between pt-2">
                    <p class="price mt-1 text-sm font-medium text-gray-900">$<?= $cart['price']?></p>
                    <div class="ml-4">
                      <label for="quantity" class="sr-only">Quantity</label>
                      <select disabled id="quantity" name="quantity" class="rounded-md border border-gray-300 text-left text-base font-medium text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                        <option value="1"><?= $cart['quantity']?></option>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
            <?php endforeach;?>
          </ul>
          <dl class="space-y-6 border-t border-gray-200 px-4 py-6 sm:px-6">
            <div class="flex items-center justify-between">
              <dt class="text-sm">Subtotal</dt>
              <dd class="text-sm font-medium text-gray-900">$<?= $subbtotal?></dd>
            </div>
            <div class="flex items-center justify-between">
              <dt class="text-sm">Shipping</dt>
              <dd class="text-sm font-medium text-gray-900">$16</dd>
            </div>
            <div class="flex items-center justify-between border-t border-gray-200 pt-6">
              <dt class="text-base font-medium">Total</dt>
              <dd class="text-base font-medium text-gray-900">$<?= $sumtotal?></dd>
            </div>
          </dl>

          <form method="post" action="/checkout/store">
            <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
              <button type="submit" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Confirm order</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
