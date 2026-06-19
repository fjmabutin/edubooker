<?php
// addUser.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    

    <style>
        body{
    background:#f5f6fa;
    font-family:'Poppins', sans-serif;
}

/* FORCE ALL ELEMENTS */
*{
    font-family:'Poppins', sans-serif;
}

        .container {
            display: flex;
        }

        .main-content {
            margin-left: 250px; /* adjust based sa sidebar width mo */
            padding: 25px;
            width: 90%;
        }

        .card {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        .card h2 {
            margin-bottom: 20px;
            color: #b30000;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 14px;
            margin-bottom: 5px;
        }

        

        .form-group input,
        .form-group select {
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 7px;
            width: 90%;
        }

        .full-width {
            grid-column: span 2;
        }

        .permissions {
            margin-top: 20px;
        }

        .permissions label {
            margin-right: 15px;
        }

        .actions {
            margin-top: 25px;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .btn {
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn-cancel {
            background: #ccc;
        }

        .btn-submit {
            background: #b30000;
            color: #fff;
        }
        .form-group label {
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 6px;
    color: #333;
}

/* =========================
   FORCED SIDEBAR DESIGN
========================= */

.sidebar{
    width: 230px;
    height: 100vh;
    background: #8b0000;
    position: fixed;
    left: 0;
    top: 0;
    padding: 20px;
    z-index: 1000;
}

/* LOGO */
.logo-section{
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 50px;
}

.logo-section img{
    width: 45px;
    border-radius: 50%;
}

.logo-text h1{
    color: white;
    font-size: 25px;
    font-weight: 700;
}

.logo-text p{
    color: white;
    font-size: 13px;
}

/* NAV */
.nav-links{
    list-style: none;
    padding: 0;
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
    font-size: 17px;
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

/* =========================
   LOGOUT MODAL (GLOBAL)
========================= */

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

    
</head>

<body>

<div class="container">
<?php include_once '../includes/sidebar.php'; ?>

<div class="main-content">
        <div class="card">
            <h2>Add User</h2>

            <form onsubmit="createUser(event)">
                <div class="form-grid">

                    <div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="text" id="fullname" name="fullname" placeholder="Enter full name" required>
</div>

<div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" placeholder="Enter email" required>
</div>

<div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" placeholder="Enter phone number">
</div>

<div class="form-group">
    <label for="role">Role</label>
    <select id="role" name="role" required>
        <option value="">Select role</option>
        <option>Admin</option>
        <option>Student</option>
    </select>
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter password" required>
</div>

<div class="form-group">
    <label for="confirm_password">Confirm Password</label>
    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" required>
</div>

<div class="form-group">
    <label for="status">Status</label>
    <select id="status" name="status">
        <option>Active</option>
        <option>Disabled</option>
    </select>
</div>

                <!-- ✅ PERMISSIONS -->
                <div class="permissions">
                    <h3>Permissions</h3>
                    <label><input type="checkbox"> Dashboard</label>
                    <label><input type="checkbox"> Users</label>
                    <label><input type="checkbox"> Reports</label>
                    <label><input type="checkbox"> Settings</label>
                </div>

                <!-- ✅ ACTION BUTTONS -->
                <div class="actions">
                    <button type="button" class="btn btn-cancel" onclick="window.history.back()">Cancel</button>
                    <button type="submit" class="btn btn-submit">Create User</button>
                </div>

            </form>
        </div>
    </div>

</div>

<!-- ✅ FAKE EMAIL / SUCCESS POPUP -->
<script>
function createUser(event) {
    event.preventDefault();

    alert("✅ User created successfully!\n📧 Email notification sent.");
}
</script>

</body>
</html>