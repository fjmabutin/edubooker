
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Room Requests</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <style>


/* MODAL */

.modal-overlay{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 999;
}

.modal{
    background: white;
    width: 480px;
    border-radius: 16px;
    padding: 25px;
    position: relative;
}

.modal h2{
    text-align: center;
    margin-bottom: 10px;
}

.modal p{
    text-align: center;
    color: #666;
    margin-bottom: 20px;
}

.modal-close{
    position: absolute;
    right: 15px;
    top: 10px;
    cursor: pointer;
    font-size: 20px;
}

.modal-actions{
    display: flex;
    gap: 10px;
    margin-top: 20px;
}

.modal-actions button{
    flex: 1;
}


        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body{
            background: #f5f5f5;
        }


        /* MAIN CONTENT */

        .main-content{
            margin-left: 220px;
            padding: 35px;
        }


        /* HEADER */

        .request-header{
            margin-bottom: 35px;
        }

        .request-header h1{
            font-size: 45px;
            color: #8b0000;
            font-weight: 700;
        }


        /* TABS */

        .request-tabs{
            display: flex;
            gap: 50px;
            margin-bottom: 25px;
            padding-left: 5px;
        }

        .request-tabs button{
            border: none;
            background: none;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            padding-bottom: 10px;
        }

        .pending-tab{
            color: #8b0000;
            border-bottom: 3px solid #8b0000 !important;
        }

        .approved-tab{
            color: dark;
        }

        .rejected-tab{
            color: orange;
        }



        /* CONTAINER */

        .request-container{
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }



        /* LEFT SIDE */

        .request-list{
            flex: 1;

            display: flex;
            flex-direction: column;
            gap: 18px;
        }



        /* CARD */

        .request-card{
            background: white;
            border-radius: 18px;
            padding: 22px;

            border: 1px solid #e2e2e2;

            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 20px;
        }



        /* USER */

        .request-user{
            display: flex;
            align-items: center;
            gap: 15px;

            min-width: 230px;
        }

        .request-user img{
            width: 65px;
            height: 65px;
            border-radius: 50%;
        }

        .request-user h3{
            font-size: 23px;
            font-weight: 600;
            color: #222;
        }

        .request-user p{
            color: #777;
            font-size: 14px;
        }



        /* ROOM */

        .request-room{
            border-left: 1px solid #ddd;
            padding-left: 25px;
            min-width: 180px;
        }

        .request-room h3{
            font-size: 24px;
            margin-bottom: 3px;
        }

        .request-room p,
        .request-room span{
            color: #666;
            font-size: 14px;
        }



        /* PURPOSE */

        .request-purpose{
            border-left: 1px solid #ddd;
            padding-left: 25px;
            min-width: 170px;
        }

        .request-purpose h3{
            margin-bottom: 6px;
            font-size: 18px;
        }

        .request-purpose p{
            color: #555;
        }



        /* ACTIONS */

        .request-actions{
            border-left: 1px solid #ddd;
            padding-left: 20px;

            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .action-buttons{
            display: flex;
            gap: 10px;
        }



        /* BUTTONS */

        .approve-btn{
            background: #d9f3dc;
            color: green;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }

        .reject-btn{
            background: #ffd8df;
            color: crimson;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }

        .details-btn{
            border: 1px solid #8b0000;
            background: white;
            color: #8b0000;

            padding: 10px;
            border-radius: 8px;

            font-weight: 600;
            cursor: pointer;
        }



        /* RIGHT SIDE */

        .request-details{
            width: 340px;
            background: white;

            border: 1px solid #e2e2e2;
            border-radius: 20px;

            padding: 28px;

            position: sticky;
            top: 20px;

            display: none;
        }

        .request-details.active{
            display: block;
        }

        .request-details h2{
            font-size: 30px;
            margin-bottom: 25px;
        }



        /* PROFILE */

        .details-profile{
            display: flex;
            align-items: center;
            gap: 15px;

            margin-bottom: 25px;
        }

        .details-profile img{
            width: 75px;
            height: 75px;
            border-radius: 50%;
        }

        .details-profile h3{
            font-size: 22px;
        }

        .details-profile p{
            color: #777;
            margin-bottom: 8px;
        }



        /* STATUS */

        .pending-status{
            background: #ffd7df;
            color: crimson;

            padding: 5px 12px;
            border-radius: 20px;

            font-size: 12px;
            font-weight: 600;
        }



        /* DETAILS */

        .details-info{
            border-top: 1px solid #ddd;
            padding-top: 20px;

            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .info-group{
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .info-group label{
            color: #666;
            font-weight: 600;
        }

        .info-group p{
            font-weight: 600;
            text-align: right;
        }



        /* NOTES */

        .notes-box{
            margin-top: 25px;
        }

        .notes-box label{
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .notes-box textarea{
            width: 100%;
            height: 90px;

            border: 1px solid #ddd;
            border-radius: 10px;

            padding: 12px;
            resize: none;

            outline: none;
        }



        /* DETAILS BUTTONS */

        .details-buttons{
            display: flex;
            gap: 15px;

            margin-top: 25px;
        }

        .details-buttons button{
            flex: 1;
        }



        .modal-icon{
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    font-size: 24px;
}

.approve-style .modal-icon{
    background: #d9f3dc;
    color: green;
}

.reject-style .modal-icon{
    background: #ffd8df;
    color: crimson;
}

    </style>

</head>


<?php include '../includes/sidebar.php'; ?>

<body>


<div class="main-content">


    <!-- HEADER -->

    
    <div class="header">
        <h1>Request Room</h1>
    </div>




    <!-- TABS -->

    <div class="request-tabs">

        <button class="pending-tab">
            Pending
        </button>

        <button class="approved-tab">
            Approved
        </button>

        <button class="rejected-tab">
            Rejected
        </button>

    </div>


    

    <!-- CONTAINER -->

    <div class="request-container">


        <!-- LEFT SIDE -->

        <div class="request-list">


            <!-- CARD -->

            <div class="request-card">

                <div class="request-user">

                    <img src="../assets/AngelHearth.png">

                    <div>
                        <h3>Angel Hearth Miole</h3>
                        <p>2025-05555-MN-0</p>
                    </div>

                </div>



                <div class="request-room">

                    <h3>COMLAB 201</h3>

                    <p>March 21, 2026</p>

                    <span>1:00PM - 3:00PM</span>

                </div>



                <div class="request-purpose">

                    <h3>Purpose</h3>

                    <p>Group Meeting</p>

                </div>



                <div class="request-actions">

                    <div class="action-buttons">

                       <button class="approve-btn action-btn"
    data-action="approve"
    data-name="Angel Hearth Miole"
    data-room="COMLAB 201"
    data-date="March 21, 2026"
    data-time="1:00PM - 3:00PM"
    data-purpose="Group Meeting">
    Approve
</button>

<button class="reject-btn action-btn"
    data-action="reject"
    data-name="Angel Hearth Miole"
    data-room="COMLAB 201"
    data-date="March 21, 2026"
    data-time="1:00PM - 3:00PM"
    data-purpose="Group Meeting">
    Reject
</button>

                    </div>



                    <button class="details-btn"

                        data-name="Angel Hearth Miole"
                        data-room="COMLAB 201"
                        data-date="March 21, 2026"
                        data-time="1:00PM - 3:00PM"
                        data-purpose="Group Meeting">

                        View Details

                    </button>

                </div>

            </div>





            <!-- SECOND CARD -->

            <div class="request-card">

                <div class="request-user">

                    <img src="../assets/DaneMacnel.png">

                    <div>
                        <h3>Dane Macnel Perez</h3>
                        <p>2025-08888-MN-0</p>
                    </div>

                </div>



                <div class="request-room">

                    <h3>COMLAB 208</h3>

                    <p>March 21, 2026</p>

                    <span>2:00PM - 10:00PM</span>

                </div>



                <div class="request-purpose">

                    <h3>Purpose</h3>

                    <p>Class Discussion</p>

                </div>



                <div class="request-actions">

                    <div class="action-buttons">

<button class="approve-btn action-btn"
    data-action="approve"
    data-name="Angel Hearth Miole"
    data-room="COMLAB 201"
    data-date="March 21, 2026"
    data-time="1:00PM - 3:00PM"
    data-purpose="Group Meeting">
    Approve
</button>

<button class="reject-btn action-btn"
    data-action="reject"
    data-name="Angel Hearth Miole"
    data-room="COMLAB 201"
    data-date="March 21, 2026"
    data-time="1:00PM - 3:00PM"
    data-purpose="Group Meeting">
    Reject
</button>

                    </div>



                    <button class="details-btn"

                        data-name="Dane Macnel Perez"
                        data-room="COMLAB 208"
                        data-date="March 21, 2026"
                        data-time="2:00PM - 10:00PM"
                        data-purpose="Class Discussion">

                        View Details

                    </button>

                </div>

            </div>

        </div>





        <!-- RIGHT SIDE -->

        <div class="request-details" id="requestDetails">

            <h2>Request Details</h2>


            <div class="details-profile">

                <img src="../assets/AngelHearth.png">

                <div>

                    <h3 id="detailName">
                        Student Name
                    </h3>

                    <p>Student</p>

                    <span class="pending-status">
                        Pending
                    </span>

                </div>

            </div>



            <div class="details-info">

                <div class="info-group">

                    <label>Room</label>

                    <p id="detailRoom">-</p>

                </div>


                <div class="info-group">

                    <label>Date</label>

                    <p id="detailDate">-</p>

                </div>


                <div class="info-group">

                    <label>Time</label>

                    <p id="detailTime">-</p>

                </div>


                <div class="info-group">

                    <label>Purpose</label>

                    <p id="detailPurpose">-</p>

                </div>

            </div>



            <div class="notes-box">

                <label>Additional Notes</label>

                <textarea placeholder="Write notes here..."></textarea>

            </div>



            <div class="details-buttons">

                <button class="approve-btn action-btn"
    data-action="approve"
    data-name="Angel Hearth Miole"
    data-room="COMLAB 201"
    data-date="March 21, 2026"
    data-time="1:00PM - 3:00PM"
    data-purpose="Group Meeting">
    Approve
</button>

<button class="reject-btn action-btn"
    data-action="reject"
    data-name="Angel Hearth Miole"
    data-room="COMLAB 201"
    data-date="March 21, 2026"
    data-time="1:00PM - 3:00PM"
    data-purpose="Group Meeting">
    Reject
</button>

            </div>

        </div>

    </div>

</div>




<script>
document.addEventListener("DOMContentLoaded", function() {

    // ===== VIEW DETAILS (your old code) =====
    const detailButtons = document.querySelectorAll('.details-btn');
    const detailsPanel = document.getElementById('requestDetails');

    detailButtons.forEach(button => {
        button.addEventListener('click', () => {

            detailsPanel.classList.add('active');

            document.getElementById('detailName').innerText = button.dataset.name;
            document.getElementById('detailRoom').innerText = button.dataset.room;
            document.getElementById('detailDate').innerText = button.dataset.date;
            document.getElementById('detailTime').innerText = button.dataset.time;
            document.getElementById('detailPurpose').innerText = button.dataset.purpose;

        });
    });


    // ===== APPROVE / REJECT =====
    const actionButtons = document.querySelectorAll('.action-btn');
    const modal = document.getElementById('modalOverlay');

    actionButtons.forEach(button => {
        button.addEventListener('click', () => {

            modal.style.display = "flex";

            document.getElementById('mName').innerText = button.dataset.name;
            document.getElementById('mRoom').innerText = button.dataset.room;
            document.getElementById('mDate').innerText = button.dataset.date;
            document.getElementById('mTime').innerText = button.dataset.time;
            document.getElementById('mPurpose').innerText = button.dataset.purpose;

            if(button.dataset.action === "approve"){
                document.getElementById('modalTitle').innerText = "Approve Request";
                document.getElementById('rejectFields').style.display = "none";
            } else {
                document.getElementById('modalTitle').innerText = "Reject Request";
                document.getElementById('rejectFields').style.display = "block";
            }

        });
    });

});

// Close modal (outside is fine)
function closeModal(){
    document.getElementById('modalOverlay').style.display = "none";
}
</script>
<!-- MODAL -->

<div class="modal-overlay" id="modalOverlay">

    <div class="modal" id="modalBox">

        <span class="modal-close" onclick="closeModal()">×</span>

        <h2 id="modalTitle">Approve Request</h2>

        <p id="modalText">
            Are you sure you want to proceed?
        </p>

        <div id="modalDetails" style="margin-bottom:15px; font-size:14px;">
            <strong id="mName"></strong><br>
            <span id="mRoom"></span><br>
            <span id="mDate"></span><br>
            <span id="mTime"></span><br>
            <span id="mPurpose"></span>
        </div>

        <!-- REJECT EXTRA -->
        <div id="rejectFields" style="display:none;">

            <select style="width:100%; padding:10px; margin-bottom:10px;">
                <option>Room not available</option>
                <option>Schedule conflict</option>
                <option>Incomplete details</option>
            </select>

            <textarea placeholder="Additional notes..."
                style="width:100%; padding:10px; border:1px solid #ddd; border-radius:8px;"></textarea>

        </div>

        <div class="modal-actions">
    <button class="reject-btn" onclick="closeModal()">Cancel</button>
    <button class="approve-btn" id="confirmBtn">Yes, Reject</button>
</div>

    </div>

</div>

</body>
</html>