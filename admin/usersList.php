<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- SIDEBAR CSS (THIS IS CORRECT) -->
    <!-- Piczon: Sidebar.css does not exist. I recommend to remove this line-->
    <link rel="stylesheet" href="../includes/sidebar.css">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body{
            background: #f5f5f5;
        }

        .main-content{
            margin-left: 220px;
            padding: 35px;
        }

        .top-section{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .top-section h1{
            font-size: 45px;
            color: #8b0000;
        }

        .top-buttons{
            display: flex;
            gap: 15px;
        }

        .add-btn{
            background: #a52a2a;
            color: white;
            border: none;
            padding: 14px 25px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
        }

        .export-btn{
            background: white;
            border: 1px solid #aaa;
            padding: 14px 25px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
        }

        .dashboard-cards{
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card{
            width: 170px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 15px;
            padding: 20px;
        }

        .card h4{
            font-size: 14px;
            margin-bottom: 15px;
        }

        .card h1{
            font-size: 50px;
        }

        .user-container{
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .table-container{
            flex: 1;
            background: white;
            border: 1px solid #ddd;
            border-radius: 20px;
            padding: 20px;
        }

        .search-box{
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .search-box input{
            width: 250px;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        th{
            text-align: left;
            padding: 15px;
            border-bottom: 2px solid #ddd;
        }

        td{
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .user-info{
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-info img{
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .active-status{
            background: #d8f3dc;
            color: green;
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
        }

        .disabled-status{
            background: #ffd6dc;
            color: crimson;
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
        }

        .action-btn{
            border: none;
            background: none;
            font-size: 20px;
            cursor: pointer;
            color: #555;
        }

        .user-profile{
            width: 320px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 20px;
            padding: 25px;
            display: none;
        }

        .user-profile.active{
            display: block;
        }

        .profile-top{
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .profile-top img{
            width: 75px;
            height: 75px;
            border-radius: 50%;
        }

        .profile-details{
            border-top: 1px solid #ddd;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .detail{
            display: flex;
            justify-content: space-between;
        }

        .profile-buttons{
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 30px;
        }

        .profile-buttons button{
            border: none;
            background: none;
            font-size: 22px;
            cursor: pointer;
            color: #8b0000;
        }
    </style>
</head>

<body>
    <?php include_once '../includes/sidebar.php'; ?>

    <div class="main-content">

        <!-- HEADER -->
        <div class="top-section">
            <div class="header">
                 <h1 style='font-size: 30px; color: #8b0000;'>User Management</h1>
            </div>

            <div class="top-buttons">
                <button class="add-btn">
                    <i class="fa-solid fa-plus"></i>
                    <a href="addUser.php" style="color:white; text-decoration:none;">
                        Add User
                    </a>
                </button>
                <a href="../assets/users.csv" download class="export-btn" style="color:blue; text-decoration:none;">
                    <i class="fa-solid fa-download"></i>
                    Export CSV
                </a>
            </div>
        </div>

        <!-- YOUR DATA KEPT EXACTLY SAME -->
        <div class="dashboard-cards">
            <div class="card">
                <h4>Total Users</h4>
                <h1>30</h1>
            </div>

            <div class="card">
                <h4 style="color:#2d5be3;">Students</h4>
                <h1>67</h1>
            </div>

            <div class="card">
                <h4 style="color:#557c2d;">Faculty / Staff</h4>
                <h1>15</h1>
            </div>
        </div>

        <!-- TABLE + PROFILE -->
        <div class="user-container">

            <div class="table-container">

                <div class="search-box">
                    <input type="text" placeholder="Search user...">
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Role</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="../assets/AngelHearth.png" alt="ANGEL">
                                    <span>Angel Hearth Miole</span>
                                </div>
                            </td>
                            <td>Student</td>
                            <td>BS Information Tech</td>
                            <td><span class="disabled-status">DISABLED</span></td>
                            <td>
                            <button class="action-btn"
                                data-name="Angel Hearth Miole"
                                data-role="Student"
                                data-email="hatdog@gmail.com"
                                data-department="BS Information"
                                data-studentid="0905-0909-MN-0"
                                data-phone="09011062831"
                                data-status="ACTIVE">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="../assets/DaneMacnel.png" alt="DANE">
                                    <span>Dane Macnel Perez</span>
                                </div>
                            </td>
                            <td>Admin</td>
                            <td>Admin Office</td>
                            <td><span class="active-status">ACTIVE</span></td>
                            <td>
                            <button class="action-btn"
                                data-name="Dane Macnel Perez"
                                data-role="Admin"
                                data-email="admin@gmail.com"
                                data-department="Admin Office"
                                data-studentid="0905-0999-MN-0"
                                data-phone="09999999999"
                                data-status="ACTIVE">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- PROFILE -->
            <div class="user-profile" id="userProfile">

                <h2>User Profile</h2>

                <div class="profile-top">
                    <img src="../assets/defaultProfile.png" alt="default">

                    <div>
                        <h3 id="profileName">User Name</h3>
                        <p id="profileRole">Role</p>
                        <span class="active-status" id="profileStatus">ACTIVE</span>
                    </div>
                </div>

                <div class="profile-details">
                    <div class="detail">
                        <strong>Email</strong>
                        <p id="profileEmail">-</p>
                    </div>

                    <div class="detail">
                        <strong>Department</strong>
                        <p id="profileDepartment">-</p>
                    </div>

                    <div class="detail">
                        <strong>Student ID</strong>
                        <p id="profileStudentID">-</p>
                    </div>

                    <div class="detail">
                        <strong>Phone</strong>
                        <p id="profilePhone">-</p>
                    </div>
                </div>

                <div class="profile-buttons">
                    <button><i class="fa-solid fa-pen-to-square"></i></button>
                    <button><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const actionButtons = document.querySelectorAll('.action-btn');
        const userProfile = document.getElementById('userProfile');

        actionButtons.forEach(button => {

            button.addEventListener('click', () => {
                userProfile.classList.add('active');

                document.getElementById('profileName').innerText = button.dataset.name;
                document.getElementById('profileRole').innerText = button.dataset.role;
                document.getElementById('profileEmail').innerText = button.dataset.email;
                document.getElementById('profileDepartment').innerText = button.dataset.department;
                document.getElementById('profileStudentID').innerText = button.dataset.studentid;
                document.getElementById('profilePhone').innerText = button.dataset.phone;
                document.getElementById('profileStatus').innerText = button.dataset.status;
            });
        });
    </script>
</body>
</html>
