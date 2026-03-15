<?php
require_once 'auth.php';

if (isset($_SESSION['cms_logged_in']) && $_SESSION['cms_logged_in'] === true) {
    header('Location: index.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    global $admin_user, $admin_pass;
    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['cms_logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperium CMS - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; }
        .login-card { width: 100%; max-width: 400px; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); background: #fff; }
        .login-btn { background-color: #e50019; border-color: #e50019; }
        .login-btn:hover { background-color: #c40015; border-color: #c40015; }
    </style>
</head>
<body>
    <div class="login-card">
        <h3 class="text-center mb-4">Imperium CMS</h3>
        <?php if ($error): ?>
            <div class="alert alert-danger p-2 text-center"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required autofocus>
            </div>
            <div class="mb-4">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 login-btn">Login</button>
        </form>
    </div>
</body>
</html>
