<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <link rel="stylesheet" href="../style/system.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<?php include '../includes/sidebar.php'; ?>

<body>

<!-- OVERLAY -->

<div id="overlay"
onclick="closeLogout()"
style="
position:fixed;
top:0;
left:220px;
width:calc(100% - 220px);
height:100%;
background:rgba(0,0,0,.5);
display:none;
z-index:999;
">
</div>

<!-- LOGOUT MODAL -->

<div id="logoutModal"
style="
position:fixed;
top:50%;
left:calc(50% + 110px);
transform:translate(-50%,-50%);
background:#fff;
padding:25px;
width:320px;
border-radius:12px;
text-align:center;
display:none;
z-index:1000;
">

<h2 style="color:#8b0000;">
Confirm Logout
</h2>

<p>
Are you sure you want to logout?
</p>

<div style="margin-top:20px; display:flex; gap:10px; justify-content:center;">

<button onclick="closeLogout()">
Cancel
</button>

<button onclick="window.location.href='../logout.php'">
Logout
</button>

</div>

</div>

<script src="../js/logout.js"></script>

<div class="system-container">

<style>

.main-content{

margin-left:220px;

padding:35px;

background:#f8f8f8;

min-height:100vh;

}

/* HEADER */

.top-header{

display:flex;

justify-content:space-between;

align-items:center;

margin-bottom:35px;

}

.header h1{

color:#8b0000;

font-size:34px;

margin-bottom:5px;

}

.header p{

color:#777;

}

/* ICONS */

.header-icons{

display:flex;

align-items:center;

gap:20px;

}

.profile img{

width:48px;

height:48px;

border-radius:50%;

object-fit:cover;

cursor:pointer;

}

/* NOTIFICATION */

.notif-container{

position:relative;

}

.notif-container i{

font-size:22px;

cursor:pointer;

}

.notif-dot{

position:absolute;

top:0;

right:0;

width:10px;

height:10px;

background:red;

border-radius:50%;

}

.notif-box{

display:none;

position:absolute;

top:35px;

right:0;

width:280px;

background:white;

border-radius:10px;

box-shadow:0 5px 20px rgba(0,0,0,.15);

padding:15px;

z-index:999;

}

.notif-item{

padding:12px 0;

border-bottom:1px solid #eee;

}

.notif-item:last-child{

border:none;

}

/* PROGRESS */

.progress-card{

background:white;

border-radius:15px;

padding:25px;

box-shadow:0 3px 10px rgba(0,0,0,.08);

margin-bottom:35px;

}

.progress-title{

font-size:20px;

color:#8b0000;

margin-bottom:25px;

}

.progress{

display:flex;

align-items:center;

justify-content:space-between;

}

.step{

display:flex;

flex-direction:column;

align-items:center;

font-size:13px;

color:#666;

}

.circle{

width:45px;

height:45px;

border-radius:50%;

background:#e8e8e8;

display:flex;

align-items:center;

justify-content:center;

font-size:18px;

}

.step.done .circle{

background:#4CAF50;

color:white;

}

.line{

height:4px;

flex:1;

background:#ddd;

margin:0 10px;

border-radius:20px;

}

.line.active{

background:#4CAF50;

}

.sidebar h3:first-child{
    display:none;
}

.sidebar p:first-child{
    display:none;
}

</style>
<div class="main-content">


<!-- HEADER -->

<div class="top-header">

<div class="header">

<h1>

Welcome back, Dane!

</h1>

<p>

Here's what's happening with your request.

</p>

</div>

<div class="header-icons">

<div class="notif-container">

<i class="fa-regular fa-bell"
onclick="toggleNotif()"></i>

<span class="notif-dot"></span>

<div id="notifBox"
class="notif-box">

<h4>Notifications</h4>

<div class="notif-item">

<strong>Approved</strong>

<br>

Your request for LAB 201 has been approved.

</div>

<div class="notif-item">

<strong>Reminder</strong>

<br>

You have a reservation tomorrow.

</div>

<div class="notif-item">

<strong>Pending</strong>

<br>

Waiting for admin approval.

</div>

</div>

</div>

<div class="profile">

<a href="settings.php">

<img src="../assets/DaneMacnel.png">

</a>

</div>

</div>

</div>

<!-- REQUEST PROGRESS -->

<div class="progress-card">

<h2 class="progress-title">

Request Progress

</h2>

<div class="progress">

<div class="step done">

<div class="circle">

<i class="fa-solid fa-file"></i>

</div>

<span>Submitted</span>

</div>

<div class="line active"></div>

<div class="step done">

<div class="circle">

<i class="fa-solid fa-check"></i>

</div>

<span>Approved</span>

</div>

<div class="line"></div>

<div class="step">

<div class="circle">

<i class="fa-solid fa-door-open"></i>

</div>

<span> In Use</span>

</div>

<div class="line"></div>

<div class="step">

<div class="circle">

<i class="fa-solid fa-check-double"></i>

</div>

<span>Completed</span>

</div>

</div>

</div>