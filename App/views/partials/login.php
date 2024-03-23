    <div class="flex justify-center p-7 pt-32 md:px-1 sm:px-1">
        <!-- Login Form Box -->
        <div class="flex justify-center w-3/5 md:w-3/5 max-sm:w-full sm:w-full items-center">
          <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-500 mx-6">
            <h2 class="text-4xl text-center font-bold mb-4">Login</h2>
            <!-- <div class="message bg-red-100 p-3 my-3">This is an error message.</div>
            <div class="message bg-green-100 p-3 my-3">
              This is a success message.
            </div> -->
            <form>
              <div class="mb-4">
                <input
                  type="email"
                  name="email"
                  placeholder="Email Address"
                  class="w-full px-4 py-2 border rounded focus:outline-none"
                />
              </div>
              <div class="mb-4">
                <input
                  type="password"
                  name="password"
                  placeholder="Password"
                  class="w-full px-4 py-2 border rounded focus:outline-none"
                />
              </div>
              <button
                type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none"
              >
                Login
              </button>
              <p class="mt-4 text-gray-500">
                Don't have an account?
                <a class="text-blue-900" href="/register">Register</a>
              </p>
            </form>
          </div>
        </div>
    </div>

    <main class="mx-auto max-w-7xl px-4 pb-24 pt-24 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-none">
            <h1 class="text-3xl font-semibold mb-8">Checkout</h1>

            <form action="submit_order.php" method="post" class="space-y-6">
                <div>
                    <h2 class="text-xl font-semibold mb-2">Contact Information</h2>
                    <input type="email" name="email-address" id="email-address" placeholder="Email address" class="block w-full border-gray-300 rounded-md shadow-sm py-2 px-3">
                </div>

                <div>
                    <h2 class="text-xl font-semibold mb-2">Shipping Information</h2>
                    <input type="text" name="full-name" id="full-name" placeholder="Full name" class="block w-full border-gray-300 rounded-md shadow-sm py-2 px-3 mb-2">
                    <input type="text" name="phone-number" id="phone-number" placeholder="Phone number" class="block w-full border-gray-300 rounded-md shadow-sm py-2 px-3 mb-2">
                    <input type="text" name="address" id="address" placeholder="Address" class="block w-full border-gray-300 rounded-md shadow-sm py-2 px-3">
                </div>

                <div>
                    <h2 class="text-xl font-semibold mb-2">Payment</h2>
                    <input type="text" name="card-number" id="card-number" placeholder="Card number" class="block w-full border-gray-300 rounded-md shadow-sm py-2 px-3 mb-2">
                    <input type="text" name="name-on-card" id="name-on-card" placeholder="Name on card" class="block w-full border-gray-300 rounded-md shadow-sm py-2 px-3 mb-2">
                    <div class="flex">
                        <input type="text" name="expiration-date" id="expiration-date" placeholder="MM/YY" class="block w-1/2 border-gray-300 rounded-md shadow-sm py-2 px-3 mb-2 mr-2">
                        <input type="text" name="cvc" id="cvc" placeholder="CVC" class="block w-1/2 border-gray-300 rounded-md shadow-sm py-2 px-3 mb-2">
                    </div>
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">Confirm Order</button>
            </form>
        </div>
    </main>