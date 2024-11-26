<div class="flex justify-center p-7 pt-32 md:px-1 sm:px-1">
    <!-- Login Form Box -->
    <div class="flex justify-center w-3/5 md:w-3/5 max-sm:w-full sm:w-full items-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-500 mx-6">
            <h2 class="text-4xl text-center font-bold mb-4">Đăng nhập</h2>
            <?= loadPartial('errors', ['errors' => $errors ?? []]) ?>
            <form method="post" action="/auth/forget">
                <div class="mb-4">
                    <input
                        type="email"
                        name="phone"
                        placeholder="email"
                        class="w-full px-4 py-2 border rounded focus:outline-none" />
                </div>
                <button
                    type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none">
                    Quên mật khẩu
                </button>
                <p class="mt-4 text-gray-500">
                    Chưa có tài khoản?
                    <a class="text-blue-900" href="/auth/register">Đăng kí</a>
                </p>
            </form>
        </div>
    </div>
</div>
