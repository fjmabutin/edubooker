
<?php
session_start();

// SAMPLE DATA (palitan mo later from database)
$fullName = "Francine Joy D. Mabutin";
$email = "francine@gmail.com";
$studentId = "2025-05565-MN-0";
$course = "Diploma in Information Technology";
$status = "ENROLLED";

// HANDLE PASSWORD UPDATE (basic only)
if(isset($_POST['update_password'])){
    $current = $_POST['current_password'];
    $new = $_POST['new_password'];

    // SAMPLE VALIDATION
    if(empty($current) || empty($new)){
        $message = "Please fill all fields.";
    } else {
        $message = "Password updated successfully (demo only).";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Settings</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
*{
    font-family: 'Poppins', sans-serif;
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:#f5f5f5;
}

.main-content{
    margin-left:220px;
    padding:40px;
}

/* HEADER */
.page-title{
    color:#8b0000;
    font-size:28px;
    font-weight:600;
}

.subtitle{
    color:#555;
    margin-bottom:30px;
}

/* CARD */
.card{
    background:white;
    padding:25px;
    border-radius:12px;
    margin-bottom:25px;
    box-shadow:0 2px 5px rgba(0,0,0,0.05);
}

/* PROFILE */
.profile-container{
    display:flex;
    gap:30px;
}

.profile-img{
    width:120px;
    height:120px;
    border-radius:50%;
    background:#ddd;
}

.form-group{
    margin-bottom:15px;
}

.form-group label{
    font-size:13px;
    color:#555;
}

.form-group input{
    width:100%;
    padding:10px;
    border-radius:8px;
    border:1px solid #ccc;
}

/* BUTTON */
.btn{
    background:#8b0000;
    color:white;
    border:none;
    padding:10px 18px;
    border-radius:8px;
    cursor:pointer;
}

/* FLEX */
.flex{
    display:flex;
    gap:20px;
}

.half{
    width:50%;
}

/* STATUS */
.status{
    background:#c8f7c5;
    color:green;
    padding:5px 10px;
    border-radius:6px;
    display:inline-block;
    font-size:12px;
    margin-top:10px;
}
</style>

</head>

<body>

<?php include '../includes/sidebar.php'; ?>

<div class="main-content">

    <h1 class="page-title">Settings</h1>
    <p class="subtitle">Manage your account and system preferences.</p>

    <!-- PROFILE -->
    <div class="card">
        <h3>Profile Information</h3>

        <div class="profile-container">

            <div>
                <div class="profile-img"></div>
                <div class="status"><?php echo $status; ?></div>
            </div>

            <div style="flex:1;">

                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" value="<?php echo $fullName; ?>">
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" value="<?php echo $email; ?>">
                </div>

                <div class="form-group">
                    <label>Student ID</label>
                    <input type="text" value="<?php echo $studentId; ?>">
                </div>

                <div class="form-group">
                    <label>Course</label>
                    <input type="text" value="<?php echo $course; ?>">
                </div>

                <button class="btn">Save Changes</button>

            </div>

        </div>
    </div>

    <!-- LOWER SECTION -->
    <div class="flex">

        <!-- SECURITY -->
        <div class="card half">
            <h3>Account Security</h3>

            <?php if(isset($message)) echo "<p>$message</p>"; ?>

            <form method="POST">

                <div class="form-group">
                    <label>Current Password</label>
                    <input type="password" name="current_password">
                </div>

                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="new_password">
                </div>

                <button class="btn" name="update_password">Update Password</button>

            </form>
        </div>

        <!-- PREFERENCE -->
        <div class="card half">
            <h3>Preference</h3>

            <div class="form-group">
                <label>Theme</label>
                <select style="width:100%; padding:10px; border-radius:8px;">
                    <option>Light</option>
                    <option>Dark</option>
                </select>
            </div>

            <div class="form-group">
                <label>Language</label>
                <select style="width:100%; padding:10px; border-radius:8px;">
                    <option>English</option>
                    <option>Filipino</option>
                </select>
            </div>

        </div>

    </div>

</div>

</body>
</html>