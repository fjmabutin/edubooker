<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Role</title>

    <link rel="stylesheet" href="style/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- HEADER -->
    <header class="navbar">

        <div class="left-nav">
            <img src="assets/pupLogo.png" alt="PUP Logo" class="logo">
            <img src="assets/iTechLogo.jpg" alt="iTech Logo" class="logo">

            <h1 class="site-name">EduBooker</h1>
        </div>

    </header>


    <!-- SELECT ROLE SECTION -->
    <section class="select-role-page">

        <!-- GRADIENTS -->
        <div class="gradient-left"></div>
        <div class="gradient-right"></div>

        <div class="select-role-container">

            <h1>Welcome!</h1>

            <p class="select-subtitle">
                Please select your role to continue
            </p>

            <div class="role-wrapper">

                <!-- ADMIN -->
                <a href="admin/adminLogin.php" class="role-box">

                    <div class="role-content">

                        <img src="assets/adminIcon.png"
                             alt="Admin Icon"
                             class="role-icon">

                        <div class="role-text">

                            <h3>Admin</h3>

                            <p>
                                Manage system, users, rooms and reservations.
                            </p>

                        </div>

                    </div>

                </a>


                <!-- FACULTY -->
                <a href="adminLogin.php" class="role-box">

                    <div class="role-content">

                        <img src="assets/facultyIcon.png"
                             alt="Faculty Icon"
                             class="role-icon">

                        <div class="role-text">

                            <h3>Faculty</h3>

                            <p>
                                Manage classes and room reservations.
                            </p>

                        </div>

                    </div>

                </a>


                <!-- STUDENT -->
                <a href="login.php" class="role-box active-role">

                    <div class="role-content">

                        <img src="assets/studentIcon.png"
                             alt="Student Icon"
                             class="role-icon">

                        <div class="role-text">

                            <h3>Student</h3>

                            <p>
                                Book room and manage reservations.
                            </p>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </section>

</body>
</html>
