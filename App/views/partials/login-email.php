<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Login Form Container -->
    <div class="flex justify-center p-7 pt-32 md:px-1 sm:px-1">
        <div class="flex justify-center w-3/5 md:w-3/5 max-sm:w-full sm:w-full items-center">
            <div class="bg-white p-8 rounded-lg shadow-md w-full md:max-w-md mx-6">
                <h2 class="text-4xl text-center font-bold mb-6">Đăng nhập</h2>

                <!-- Thông báo lỗi (nếu có) -->
                <!-- Thêm PHP để hiển thị lỗi -->
                <div>
                    <?= loadPartial('errors', ['errors' => $errors ?? []]) ?>
                </div>

                <!-- Form đăng nhập -->
                <form method="post" action="/auth/login-email">
                    <!-- Email -->
                    <div class="mb-4">
                        <input
                            type="email"
                            name="email"
                            placeholder="Email"
                            value="<?= $user['email'] ?? '' ?>"
                            required
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>

                    <!-- Mật khẩu -->
                    <div class="mb-4">
                        <input
                            type="password"
                            name="password"
                            placeholder="Password"
                            required
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>

                    <!-- Nút Đăng nhập -->
                    <button
                        type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300">
                        Đăng nhập
                    </button>

                    <!-- Đăng kí & Quên mật khẩu -->
                    <p class="mt-4 text-gray-500">
                        Chưa có tài khoản?
                        <a class="text-blue-900 hover:underline" href="/auth/register">Đăng kí</a>
                    </p>
                    <p class="mt-4">
                        <a class="text-blue-900 hover:underline" href="/auth/forget">Quên mật khẩu?</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
