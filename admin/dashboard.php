95<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

<link rel="stylesheet" href="../style/system.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
```

</head>

<?php include '../includes/sidebar.php'; ?>

<body>

<!-- OVERLAY -->

<div id="overlay" onclick="closeLogout()" style="
    position: fixed;
    top: 0;
    left: 220px;
    width: calc(100% - 220px);
    height: 100%;
    background: rgba(0,0,0,0.5);
    display: none;
    z-index: 999;
"></div>

<!-- LOGOUT MODAL -->

<div id="logoutModal" style="
    position: fixed;
    top: 50%;
    left: calc(50% + 110px);
    transform: translate(-50%, -50%);
    background: white;
    padding: 25px;
    border-radius: 10px;
    text-align: center;
    width: 300px;
    display: none;
    z-index: 1000;
">
    <h2 style="color:#8b0000;">Confirm Logout</h2>
    <p>Are you sure you want to logout?</p>

```
<button onclick="closeLogout()">Cancel</button>
<button onclick="window.location.href='../logout.php'">
    Yes, logout
</button>
```

</div>

<script src="../js/logout.js"></script>

<div class="system-container">

```
<style>
    .main-content {
        margin-left: 220px;
        padding: 35px;
    }
    .table-wrapper::-webkit-scrollbar {
    width: 6px;
}

.table-wrapper::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 10px;
}

    
</style>

<!-- MAIN CONTENT -->
<div class="main-content">

    <!-- TOP HEADER -->
    <div class="top-header">
        <div class="header">
            <h1 style="color: #8b0000;">Hello, Admin!</h1>
            <p style="color: #9b6d6d;">Manage reservations, rooms, and requests</p>
        </div>

        <div class="header-icons"><div class="notif-container">
    <i class="fa-regular fa-bell" onclick="toggleNotif()"></i>
    <span class="notif-dot"></span>

    <!-- NOTIFICATION DROPDOWN -->
    <div id="notifBox" class="notif-box">
        <h4>Notifications</h4>

        <div class="notif-item unread">
            <p><strong>Approved</strong></p>
            <span>Your approval was successful</span>
        </div>

        <div class="notif-item unread">
            <p><strong>Double Booking</strong></p>
            <span>Schedule conflict detected</span>
        </div>

        <div class="notif-item">
            <p><strong>Request Rejected</strong></p>
            <span>IT 303 rejected</span>
        </div>
    </div>
</div>
            <div class="profile">
    <a href="settings.php">
        <img src="../assets/FrancineJoy.png" alt="">
    </a>
</div>
        </div>
    </div>

    <!-- DASHBOARD CARDS -->
    <div class="dashboard-cards">
        <div class="card">
            <h3> Occupied Rooms</h3>
            <h1>30</h1>
        </div>

        <div class="card">
            <h3 class="available-text">Available Rooms</h3>
            <h1>67</h1>
        </div>

        <div class="card">
            <h3 class="pending-text">Pending Request</h3>
            <h1>15</h1>
        </div>
    </div>

    <!-- RECENT ACTIVITY -->
    <div class="activity-container">

        <div class="activity-header">
            <h2 style='font-size: 25px; color: #8b0000;'>Recent Requests</h2>
            <div class="search-box">
                <input type="text">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>

        <!-- TABLE -->
        <div class="table-wrapper">
    <table class="activity-table">
            <thead>
                <tr>
                    <th>Room</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Requested by</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>CS 101</td>
                    <td>April 25, 2026</td>
                    <td>8:00 AM - 9:00 AM</td>
                    <td>Dane Macnel Perez</td>
                    <td>
                        <span class="status approved">APPROVED</span>
                    </td>
                </tr>

                <tr>
                    <td>LAB 201</td>
                    <td>April 25, 2026</td>
                    <td>9:00 AM - 10:00 AM</td>
                    <td>Rugilzon Piczon</td>
                    <td>
                        <span class="status pending">PENDING</span>
                    </td>
                </tr>

                <tr>
                    <td>IT 303</td>
                    <td>April 24, 2026</td>
                    <td>10:00 AM - 10:30 AM</td>
                    <td>Irven Macalam Jr.</td>
                    <td>
                        <span class="status rejected">REJECTED</span>
                    </td>
                </tr>

                <tr>
                    <td>IT 103</td>
                    <td>May 21, 2026</td>
                    <td>09:00 AM - 10:00 AM</td>
                    <td>Francine Joy D. Mabutin.</td>
                    <td>
                        <span class="status pending">PENDING</span>
                    </td>
                </tr>

                <tr>
                    <td>LAB 303</td>
                    <td>April 18, 2026</td>
                    <td>10:00 AM - 10:30 AM</td>
                    <td>Lovely Rayne Macasaet</td>
                    <td>
                        <span class="status approved">APPROVED</span>
                    </td>
                </tr>

                
                <tr>
                    <td>LAB 109</td>
                    <td>April 25, 2026</td>
                    <td>2:00 AM - 11:00 AM</td>
                    <td>Lariz Anne Mendoza</td>
                    <td>
                        <span class="status rejected">REJECTED</span>
                    </td>
                </tr>

                
                <tr>
                    <td>LAB 303</td>
                    <td>April 18, 2026</td>
                    <td>10:00 AM - 10:30 AM</td>
                    <td>Angel Hearth Miole</td>
                    <td>
                        <span class="status approved">APPROVED</span>
                    </td>
                
                </tr>
            </tbody>
            </table>
</div>
</div>


</div>
<script>
function toggleNotif() {
    const box = document.getElementById("notifBox");
    box.style.display = (box.style.display === "block") ? "none" : "block";
}
</script>
</body>
</html>
