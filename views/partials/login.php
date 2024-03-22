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