<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Room Request Form</title>

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

/* MAIN CARD */
.container{
    max-width:900px;
    margin:40px auto;
    background:white;
    padding:50px;
    border-radius:14px;
    box-shadow:0 2px 8px rgba(0,0,0,0.08);
}

/* TITLE */
.title{
    font-size:24px;
    font-weight:700;
    color:#8b0000;
    margin-bottom:15px;
}

/* GRID */
.form-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px;
}

.full{
    grid-column:span 2;
}

label{
    display:block;
    font-size:15px;
    font-weight:700;
    margin-top:15px;
    color:black;
}

.lable i{
    color:#8b0000;
    margin-left:5px;
}
/* INPUTS */
input, textarea, select{
    width:90%;
    padding:12px;
    border-radius:10px;
    border:1px solid #ddd;
    font-size:14px;
    transition:0.2s;
}

input:focus, textarea:focus, select:focus{
    border-color:#8b0000;
    outline:none;

}

/* TEXTAREA */
textarea{
    resize:none;
    height:80px;
}

/* BUTTON */
.btn{
    background:#8b0000;
    color:white;
    border:none;
    padding:12px;
    border-radius:10px;
    cursor:pointer;
    font-weight:500;
    font-size:14px;

}
.btn-container{
    display:flex;
    justify-content:flex-end;
    margin-top:10px;
}


.btn:hover{
    background:#a30000;
}
</style>
</head>

<body>
<?php include_once '../includes/sidebar.php'; ?>

<div class="container">

    <div class="title">Room Request</div>
    <p style="margin-bottom:25px; color:#666;">
        Fill out the form to request a room.
    </p>

    <?php if(isset($_GET['success'])): ?>
        <div class="success-msg">
         Request submitted! Please wait for email confirmation.
        </div>
    <?php endif; ?>

    <form>

        <div>
    <label>Full Name</label>
    <input type="text" placeholder="Enter your full name" required>
</div>

<div>
    <label>Section</label>
    <input type="text" placeholder="Enter section" required>
</div>

<div>
    <label>Room</label>
    <input type="text" value="COMLAB 202" readonly>
</div>

<div>
    <label>Participants</label>
    <input type="number" placeholder="Number of participants" required>
</div>

<div>
    <label>Date</label>
    <input type="date" required>
</div>

<div>
    <label>Start Time</label>
    <input type="time" required>
</div>

<div>
    <label>End Time</label>
    <input type="time" required>
</div>

<div class="full">
    <label>Purpose</label>
    <textarea placeholder="Enter purpose" required></textarea>
</div>

<div class="full">
    <label>Remarks (Optional)</label>
    <textarea placeholder="Additional notes"></textarea>
</div>
<div class="full btn-container">
    <button type="submit" class="btn">Submit Request</button>
</div>

    </form>


</div>
</body>
</html>