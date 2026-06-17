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

        <li class="active">
            <a href="dashboard.php">

                <i class="fa-solid fa-house"></i>

                Dashboard

            </a>
        </li>


        <li>
            <a href="roomList.php">

                <i class="fa-solid fa-school"></i>

                Rooms

            </a>
        </li>


        <li>
            <a href="usersList.php">

                <i class="fa-solid fa-users"></i>

                Users

            </a>
        </li>


        <li>
            <a href="roomRequest.php">

                <i class="fa-solid fa-clipboard-list"></i>

                Requests

            </a>
        </li>


        <li>
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

</div>