<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<style>

.sidebar{
    width: 200px;
    height: 100vh;
    background: #8b0000;

    position: fixed;
    left: 0;
    top: 0;

    padding: 20px;

    z-index: 1000;
}

.header {
    padding: 2px;
    font-size: 15px;
    font-weight: 500;
    
}

/* LOGO */
.logo-section{
    display: flex;
    align-items: center;
    gap: 10px;

    margin-bottom:50px;
}

.logo-section img{
    width: 45px;
    border-radius:50%;
}

.logo-text h2{
    color: white;
    font-size: 20px;
    font-weight: 700;
}

.logo-text p{
    color: white;
    font-size: 10px;
}

/* NAVIGATION */
.nav-links{
    list-style: none;
}

.nav-links li{
    margin-bottom: 15px;
}

.nav-links li a{
    text-decoration: none;

    color: white;

    display: flex;
    align-items: center;
    gap: 15px;

    padding: 10px;
    border-radius: 12px;

    transition: 0.3s;

    font-size: 13px;
    font-weight: 500;
}

/* HOVER */
.nav-links li a:hover{
    background: rgba(255,255,255,0.15);
    
}

/* ACTIVE */
.nav-links .active a{
    background: rgba(255,255,255,0.20);
    
}

/* ICONS */
.nav-links li a i{
    font-size: 15px;
    width: 20px;
    
}
</style>

<div class="sidebar">

    <div class="logo-section">
        <img src="../assets/eduBookerLogo.png" alt="Logo">

        <div class="logo-text">
            <h2>EduBooker</h2>

            <p>PUP iTech Classroom Tracker</p>
        </div>
    </div>

    <ul class="nav-links">

        <li class="<?php echo ($current_page === 'dashboard.php') ? 'active' : ''; ?>">
            <a href="dashboard.php">
                <i class="fa-solid fa-house"></i>
                    Dashboard
            </a>
        </li>

        <li class="<?php echo ($current_page === 'roomList.php') ? 'active' : ''; ?>">
            <a href="roomList.php">
                <i class="fa-solid fa-school"></i>
                    Rooms
            </a>
        </li>

        <li class="<?php echo ($current_page === 'usersList.php') ? 'active' : ''; ?>">
            <a href="usersList.php">
                <i class="fa-solid fa-users"></i>
                    Users
            </a>
        </li>

        <li class="<?php echo ($current_page === 'roomRequest.php') ? 'active' : ''; ?>">
            <a href="roomRequest.php">
                <i class="fa-solid fa-clipboard-list"></i>
                    Requests
            </a>
        </li>

        <li class="<?php echo ($current_page === 'settings.php') ? 'active' : ''; ?>">
            <a href="settings.php">
                <i class="fa-solid fa-gear"></i>
                    Settings
            </a>
        </li>

        <li>
            <a href="#" onclick="openLogout()">
                <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
            </a>
        </li>

    </ul>


    <style>
        /* LOGOUT MODAL — matches roomRequest.php modal style */
        .logout-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.4);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .logout-modal {
            background: white;
            width: 400px;
            border-radius: 16px;
            padding: 30px 25px;
            position: relative;
        }

        .logout-modal h2 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 22px;
            color: #222;
        }

        .logout-modal p {
            text-align: center;
            color: #666;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .logout-close {
            position: absolute;
            right: 15px;
            top: 10px;
            cursor: pointer;
            font-size: 20px;
            background: none;
            border: none;
            color: #333;
        }

        .logout-modal-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #ffd8df;
            color: crimson;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 24px;
        }

        .logout-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .logout-actions button {
            flex: 1;
            padding: 10px 18px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            font-family: 'New Times Roman', sans-serif;
            font-size: 14px;
        }

        .logout-cancel-btn {
            background: #d9f3dc;
            color: green;
        }

        .logout-confirm-btn {
            background: #ffd8df;
            color: crimson;
        }
    </style>

    <!-- LOGOUT MODAL -->
    <div class="logout-overlay" id="logoutOverlay">

        <div class="logout-modal">
            <button class="logout-close" onclick="closeLogout()">×</button>

            <div class="logout-modal-icon">
                <i class="fa-solid fa-right-from-bracket"></i>
            </div>

            <h2>Confirm Logout</h2>
            <p>Are you sure you want to log out your account?</p>

            <div class="logout-actions">
                <button class="logout-cancel-btn" onclick="closeLogout()">Cancel</button>
                <!-- Cant find logout.php in my files -->
                <button class="logout-confirm-btn" onclick="window.location.href='/edubooker/logout.php'">Yes, Logout</button>
            </div>
        </div>
    </div>

    <!-- LOGOUT JS inlined to avoid path issues (You can remove logout.js now) -->
    <script>
        function openLogout() {
            document.getElementById("logoutOverlay").style.display = "flex";
        }

        function closeLogout() {
            document.getElementById("logoutOverlay").style.display = "none";
        }
    </script>
</div>
