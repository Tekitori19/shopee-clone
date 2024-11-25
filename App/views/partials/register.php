<div class="p-7 pt-20 md:px-1 sm:px-1">
    <!-- Registration Form Box -->
    <div class="flex justify-center items-center">
        <div class="bg-white p-8 rounded-lg w-3/5 md:w-3/5 max-sm:w-full sm:w-full shadow-md md:w-500 mx-6">
            <h2 class="text-4xl text-center font-bold mb-4">Đăng kí</h2>
            <!-- <div class="message bg-red-100 p-3 my-3">This is an error message.</div>
        <div class="message bg-green-100 p-3 my-3">
          This is a success message.
        </div> -->
            <?= loadPartial('errors', ['errors' => $errors ?? []]) ?>
            <form method="POST" action="/auth/register">
                <div class="mb-4">
                    <input
                        type="text"
                        name="name"
                        placeholder="Tên đầy đủ"
                        class="w-full px-4 py-2 border rounded focus:outline-none"
                        value="<?= $user['name'] ?? '' ?>" />
                </div>
                <div class="mb-4">
                    <input
                        type="tel"
                        name="phone"
                        placeholder="Số điện thoại"
                        pattern="[0-9]{10}"
                        class="w-full px-4 py-2 border rounded focus:outline-none"
                        value="<?= $user['phone'] ?? '' ?>" />
                </div>
                <div class="mb-4">
                    <input
                        type="text"
                        name="address"
                        placeholder="địa chỉ"
                        class="w-full px-4 py-2 border rounded focus:outline-none"
                        value="<?= $user['address'] ?? '' ?>" />
                </div>
                <div class="mb-4">
                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        class="w-full px-4 py-2 border rounded focus:outline-none" />
                </div>
                <div class="mb-4">
                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Confirm Password"
                        class="w-full px-4 py-2 border rounded focus:outline-none" />
                </div>
                <button
                    type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none">
                    Đăng kí
                </button>

                <p class="mt-4 text-gray-500">
                    Đã có tài khoản?
                    <a class="text-blue-900" href="/auth/login">Đăng nhập</a>
                </p>
            </form>
        </div>
    </div>
</div>
