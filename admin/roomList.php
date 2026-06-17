<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Management</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f5f5f5;
        }

        .main-content{
            margin-left:220px;
            padding:40px;
        }

        /* HEADER */
        .header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:30px;
        }

        .header h1{
            color:#8b0000;
        }

        /* ROOM CARD */
        .room-card{
            background:white;
            border-radius:15px;
            padding:15px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            margin-bottom:20px;
            box-shadow:0 2px 5px rgba(0,0,0,0.05);
            transition:0.2s;
        }

        .room-card:hover{
            transform:scale(1.01);
        }

        /* LEFT */
        .room-left{
            display:flex;
            gap:15px;
            align-items:center;
        }

        .room-img{
            width:90px;
            height:70px;
            border-radius:10px;
            object-fit:cover;
        }

        .room-info h3{
            font-size:18px;
        }

        .room-info p{
            font-size:13px;
            color:#777;
        }

        /* STATUS */
        .status{
            padding:6px 12px;
            border-radius:8px;
            font-size:13px;
            font-weight:500;
        }

        /* COLORS */
        .available{
            background:#c8f7c5;
            color:green;
        }

        .limited{
            background:#ffd6d6;
            color:red;
        }

        .full{
            background:#ddd;
            color:#555;
        }

        .construction{
            background:#ffe5b4;
            color:#cc8400;
        }

        /* RIGHT */
        .room-right{
            display:flex;
            align-items:center;
            gap:15px;
        }

        .arrow{
            font-size:20px;
            color:#888;
        }
    </style>
</head>

<body>

    <?php include_once '../includes/sidebar.php'; ?>

    <div class="main-content">

        <div class="header">
            <h1>Room Management</h1>
        </div>

        <!-- ROOM 1 -->
        <a href="roomDetails.php" style="text-decoration:none; color:inherit;">
        <div class="room-card">

            <div class="room-left">
                <img src="../assets/comlab.jpg" class="room-img" alt="COMLAB 202">

                <div class="room-info">
                    <h3>COMLAB 202</h3>
                    <p>50 Capacity</p>
                </div>
            </div>

            <div class="room-right">
                <span class="status available">Available</span>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
        </a>

        <!-- ROOM 2 -->
        <a href="roomDetails.php" style="text-decoration:none; color:inherit;">
        <div class="room-card">

            <div class="room-left">
                <img src="../assets/comlab2.jpg" class="room-img" alt="COMLAB 201">

                <div class="room-info">
                    <h3>COMLAB 201</h3>
                    <p>50 Capacity</p>
                    <small style="color:red;">2 slots left today</small>
                </div>
            </div>

            <div class="room-right">
                <span class="status limited">Limited</span>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>

        </div>
        </a>

        <!-- ROOM 3 -->
        <a href="roomDetails.php" style="text-decoration:none; color:inherit;">
        <div class="room-card">

            <div class="room-left">
                <img src="../assets/comlab3.jpg" class="room-img" alt="COMLAB 101">

                <div class="room-info">
                    <h3>COMLAB 101</h3>
                    <p>60 Capacity</p>
                    <small>No available slots</small>
                </div>
            </div>

            <div class="room-right">
                <span class="status full">Full Today</span>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>

        </div>
        </a>

        <!-- ROOM 4 -->
        <a href="roomDetails.php" style="text-decoration:none; color:inherit;">
        <div class="room-card">

            <div class="room-left">
                <img src="../assets/comlab4.jpg" class="room-img" alt="COMLAB 302">

                <div class="room-info">
                    <h3>COMLAB 302</h3>
                    <p>20 Capacity</p>
                    <small>Not available</small>
                </div>
            </div>

            <div class="room-right">
                <span class="status construction">Under Construction</span>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
        </a>
    </div>
</body>
</html>
