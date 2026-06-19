<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>

    <link rel="stylesheet" href="../style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- HEADER -->
    <header class="navbar">

        <div class="left-nav">
            <img src="../assets/pupLogo.png">
<img src="../assets/iTechLogo.jpg">

            <h1 class="site-name">EduBooker</h1>
        </div>

    </header>


    <!-- LOGIN SECTION -->
    <section class="login-page">

        <!-- GRADIENTS -->
        <div class="gradient-left"></div>
        <div class="gradient-right"></div>

        <div class="login-container">

            <h1>Welcome!</h1>

            <p class="login-subtitle">
                Sign in to continue to your account
            </p>


            <!-- FORM -->
           <form action="userDashboard.php" method="GET" class="login-form">

                <!-- EMAIL -->
                <div class="input-group">

                    <label>Email</label>

                    <input 
                        type="email"
                        placeholder="Enter your email"
                    >

                </div>


                <!-- PASSWORD -->
                <div class="input-group">

                    <label>Password</label>

                    <input 
                        type="password"
                        placeholder="Enter your password"
                    >

                </div>

                <div class="forgot-password">

   <a href="../forgotPass.php">
        Forgot Password?
    </a>

</div>

                <!-- LOGIN BUTTON -->
                <button type="submit" class="login-submit-btn">
    LOGIN
</button>

            </form>


            <!-- SIGN UP -->
            <p class="signup-text">
                Don’t have an account?

                <a href="../signUp.php">
                    Create an account
                </a>
            </p>

        </div>

    </section>

</body>
</html>