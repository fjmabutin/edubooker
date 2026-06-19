<?php
session_start();

if(isset($_SESSION['profile_pic'])){
    $profilePic = $_SESSION['profile_pic'];
} else {
    $profilePic = "../assets/DaneMacnel.png";
}

if(isset($_POST['upload_pic'])){
    if(isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0){

        $targetDir = __DIR__ . "/../uploads/";
        $displayPath = "/edubooker/uploads/";

        $fileName = time() . "_" . basename($_FILES["profile_pic"]["name"]);
        $targetFile = $targetDir . $fileName;
        $displayFile = $displayPath . $fileName;

        $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);

        if($check !== false){
            if(move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $targetFile)){

                $_SESSION['profile_pic'] = $displayFile;
                $profilePic = $displayFile;

                $message = "Uploaded successfully!";
            } else {
                $message = "Upload failed.";
            }
        } else {
            $message = "Invalid image file.";
        }
    }
}
?>

<?php
// SAMPLE DATA
$fullName = "Dane Macnel Perez";
$email = "dane@gmail.com";
$studentId = "2025-05565-MN-0";
$course = "Diploma in Information Technology";
$status = "ENROLLED";

// HANDLE PASSWORD UPDATE
if(isset($_POST['update_password'])){
    $current = $_POST['current_password'];
    $new = $_POST['new_password'];

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
            background-size: cover;
            background-position: center;
            margin: 20px 0 5px 10px; 
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
            gap: 30px;
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
    margin: 15px 0 10px 25px; /* ← dagdagan mo yung 40 */
}

.page-title{
    font-weight: 700;
}

.profile-wrapper{
    position: relative;
    display: inline-block;
}

.profile-img{
    width:120px;
    height:120px;
    border-radius:50%;
    background:#ddd;
    background-size: cover;
    background-position: center;
    cursor: pointer;
    position: relative;
}
.edit-icon{
    position: absolute;
    bottom: 5px;
    right: 5px;

    width: 28px;
    height: 28px;

    background: #8b0000;
    color: white;

    border-radius: 50%;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 12px;
}
    </style>
</head>

<body>
    <?php include_once '../includes/sidebar.php'; ?>

    <div class="main-content">
        <h1 class="page-title">Settings</h1>
        <p class="subtitle">Manage your account and system preferences.</p>

        <!-- PROFILE -->
        <div class="card">
            <h3>Profile Information</h3>

            <div class="profile-container">

                <div>
                    <div class="profile-wrapper">
    <form method="POST" enctype="multipart/form-data">
        
        <div class="profile-img"
onclick="document.getElementById('profileUpload').click();"
style="background-image: url('<?php echo $profilePic; ?>');">

    <span class="edit-icon">
        <i class="fa fa-pen"></i>
    </span>

</div>

        <input type="file" name="profile_pic" id="profileUpload" style="display:none;">
    </form>

    <div class="status"><?php echo $status; ?></div>
</div>
                       
                </div>

                <div style="flex:1;">

                    <div class="form-group">
                        <strong style="font-size: 14px;"> Full Name</strong>
                        <input type="text" value="<?php echo $fullName; ?>">
                    </div>

                    <div class="form-group">
                        <strong style="font-size: 14px;"> Email Address</strong>
                        <input type="text" value="<?php echo $email; ?>">
                    </div>

                    <div class="form-group">
                        <strong style="font-size: 14px;">Student ID</strong>
                        <input type="text" value="<?php echo $studentId; ?>">
                    </div>

                    <div class="form-group">
                        <strong style="font-size: 14px;">Course</strong>
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
                    <strong style="font-size: 14px;">Current Password</strong>
                    <input type="password" name="current_password">
                </div>

                <div class="form-group">
                    <strong style="font-size: 14px;">New Password</strong>
                    <input type="password" name="new_password">
                </div>

                <button class="btn" name="update_password">Update Password</button>
                </form>
            </div>

            <!-- PREFERENCE -->
            <div class="card half">
                <h3>Preference</h3>

                <div class="form-group">
                    <strong style="font-size: 14px;">Theme</strong>
                    <select style="width:100%; padding:10px; border-radius:8px;">
                        <option>Light</option>
                        <option>Dark</option>
                    </select>
                </div>

                <div class="form-group">
                    <strong style="font-size: 14px;">Language</strong>
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
