<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR (same as login) -->
    <header class="navbar">

        <div class="left-nav">
            <img src="assets/pupLogo.png" alt="PUP Logo" class="logo">
            <img src="assets/iTechLogo.jpg" alt="iTech Logo" class="logo">

            <h1 class="site-name">EduBooker</h1>
        </div>

    </header>


    <!-- SIGN UP PAGE -->
    <section class="login-page signup-page">

        <!-- GRADIENTS -->
        <div class="gradient-left"></div>
        <div class="gradient-right"></div>

        <div class="login-container">

            <h1>Create an Account</h1>

            <p class="login-subtitle">
                Fill up the form to register
            </p>

            <!-- FORM -->
            <form class="login-form">

                <!-- ROLE -->
                <div class="input-group">
                    <label>Role</label>

                    <select class="input-select">
                        <option value="">Select Role</option>
                        <option value="student">Student</option>
                        <option value="faculty">Faculty</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <!-- FULL NAME -->
                <div class="input-group">
                    <label>Full Name</label>
                    <input type="text" placeholder="Enter your full name">
                </div>

                <!-- EMAIL -->
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email">
                </div>

                <!-- PASSWORD -->
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" placeholder="Create a password">
                </div>

                <!-- NOTICE -->
                <div class="approval-notice">
                   <p class="notice-title">
    <img src="assets/infoIcon.png" alt="Info" class="info-icon">
    Account Approval
</p>
                    <p class="notice-text">
                        Your account will be reviewed by an administrator.  
                        You will be notified via email once approved.
                    </p>
                </div>

                <!-- SUBMIT -->
                <button type="submit" class="login-submit-btn">
                    Submit for Approval
                </button>

            </form>

            <!-- LOGIN LINK -->
            <p class="signup-text">
                Already have an account?

                <a href="login.php">
                    Sign in here
                </a>
            </p>

        </div>

    </section>

</body>
</html>
