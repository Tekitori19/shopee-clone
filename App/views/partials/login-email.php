<div class="flex justify-center p-7 pt-32 md:px-1 sm:px-1 bg-gray-50 min-h-screen">
    <!-- Login Form Box -->
    <div class="flex justify-center w-3/5 md:w-3/5 max-sm:w-full sm:w-full items-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full md:w-500 mx-6">
            <h2 class="text-4xl text-center font-extrabold text-gray-800 mb-6">
                Đăng nhập
            </h2>
            <!-- Hiển thị thông báo lỗi -->
            <?= loadPartial('errors', ['errors' => $errors ?? []]) ?>
            <form method="post" action="/auth/login-email">
                <div class="mb-5">
                    <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        value="<?= $user['email'] ?? '' ?>"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                </div>
                <div class="mb-5">
                    <input
                        type="password"
                        name="password"
                        placeholder="Mật khẩu"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                </div>
                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white px-4 py-3 rounded-lg focus:outline-none font-semibold shadow-md transform transition duration-300 hover:scale-105">
                    Đăng nhập
                </button>
                <p class="mt-6 text-center text-gray-600">
                    Chưa có tài khoản?
                    <a class="text-blue-500 hover:underline" href="/auth/register">Đăng kí</a>
                </p>
                <p class="mt-4 text-center text-gray-600">
                    <a class="text-blue-500 hover:underline" href="/auth/forget">Quên mật khẩu?</a>
                </p>
            </form>
        </div>
    </div>
</div>