<?php
$sent  = false;
$error = '';
$email = '';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
 
    if ($email === '') {
        $error = 'Please enter your email address.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        $sent = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
 
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
 
<body>
 
    <header class="navbar">
        <div class="left-nav">
            <img src="assets/pupLogo.png" alt="PUP Logo" class="logo">
            <img src="assets/iTechLogo.jpg" alt="iTech Logo" class="logo">
            <h1 class="site-name">EduBooker</h1>
        </div>
    </header>
 
    <section class="login-page">
 
        <div class="gradient-left"></div>
        <div class="gradient-right"></div>
 
        <div class="login-container">
 
            <?php if ($sent): ?>
 
                <h1>Check Your Email</h1>
 
                <p class="login-subtitle">
                    A reset link has been sent
                </p>
 
                <div class="success-notice">
                    <p class="success-title">✔ &nbsp;Email Sent</p>
                    <p class="notice-text">
                        If an account is linked to
                        <strong><?= htmlspecialchars($email) ?></strong>,
                        you will receive a password reset link shortly.
                        Please also check your spam or junk folder.
                    </p>
                </div>
 
                <p class="signup-text" style="margin-top: 28px;">
                    <a href="login.php">← Back to Login</a>
                </p>
 
            <?php else: ?>
 
                <h1>Forgot Password?</h1>
 
                <p class="login-subtitle">
                    Enter your email to receive a reset link
                </p>
 
                <form class="login-form" method="POST" action="forgotPass.php">
 
                    <?php if ($error !== ''): ?>
                        <div class="error-notice">
                            <p class="error-text">
                                <?= htmlspecialchars($error) ?>
                            </p>
                        </div>
                    <?php endif; ?>
 
                    <div class="input-group">
                        <label>Email Address</label>
                        <input
                            type="email"
                            name="email"
                            placeholder="Enter your registered email"
                            value="<?= htmlspecialchars($email) ?>"
                        >
                    </div>
 
                    <button type="submit" class="login-submit-btn">
                        Send Reset Link
                    </button>
 
                </form>
 
                <p class="signup-text">
                    Remembered your password?
                    <a href="login.php">Back to Login</a>
                </p>
 
            <?php endif; ?>
 
        </div>
    </section>
</body>
</html>