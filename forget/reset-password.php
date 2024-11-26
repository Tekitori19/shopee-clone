<?php
$token = $_GET['token'];
$token_hash = hash('sha256', $token);

$mysqli = require __DIR__ . "/database.php";

$sql = "SELECT * FROM users WHERE reset_token_hash = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $token_hash);
$stmt->execute();
$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null) {
    die("Token not found");
}

if (strtotime($user['reset_token_expores_at']) <= time()) {
    die("Token expired");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Reset Password</h1>
        <form action="process-reset-password.php" method="POST" class="space-y-4">
            <!-- Hidden token input -->
            <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

            <!-- New password -->
            <div>
                <label for="new_password" class="block text-gray-700 font-medium mb-2">New Password</label>
                <input 
                    type="password" 
                    name="new_password" 
                    id="new_password" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                    placeholder="Enter new password" 
                    required>
            </div>

            <!-- Confirm password -->
            <div>
                <label for="confirm_password" class="block text-gray-700 font-medium mb-2">Confirm Password</label>
                <input 
                    type="password" 
                    name="confirm_password" 
                    id="confirm_password" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                    placeholder="Confirm new password" 
                    required>
            </div>

            <!-- Submit button -->
            <div>
                <input 
                    type="submit" 
                    value="Reset Password" 
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300">
            </div>
        </form>
    </div>
</body>
</html>
