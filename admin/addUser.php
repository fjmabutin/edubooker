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
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f6fa;
        }

        .container {
            display: flex;
        }

        .main-content {
            margin-left: 250px; /* adjust based sa sidebar width mo */
            padding: 30px;
            width: 100%;
        }

        .card {
            background: #fff;
            padding: 25px;
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
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
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
                        <label>Full Name</label>
                        <input type="text" required>
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" required>
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text">
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select required>
                            <option value="">Select role</option>
                            <option>Admin</option>
                            <option>Student</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" required>
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" required>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select>
                            <option>Active</option>
                            <option>Disabled</option>
                        </select>
                    </div>

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