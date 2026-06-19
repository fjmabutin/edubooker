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
    border-bottom: none;
}

        .approved-tab{
            color: #333;
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

        .approved-tab{
            color: green;
        }

        .approve-style .modal-icon{
            background: #d9f3dc;
            color: green;
        }

        .reject-style .modal-icon{
            background: #ffd8df;
            color: crimson;
        }
        .request-tabs button.active {
    border-bottom: 3px solid #8b0000;
}

.request-container{
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

/* LEFT */
.request-list{
    flex: 1;
    min-width: 0; /* IMPORTANT para hindi mag-overflow */
}

/* RIGHT */
.request-details{
    width: 340px;
    flex-shrink: 0;
}
.request-user,
.request-room,
.request-purpose,
.request-actions{
    flex-shrink: 0;
}

.locked-card .action-buttons{
    display: none;
}
.locked-card .details-btn {
    width: 100%;
}

 </style>
</head>
<body> 

<body>
    <?php include_once '../includes/sidebar.php'; ?>

    <div class="main-content">

        <!-- HEADER -->
        <div class="header">
           
        <h1 style='font-size: 30px; color: #8b0000; padding-bottom: 15px;'>Request Room</h1>
        </div>
        
<div class="request-tabs">
    <button class="pending-tab active">Pending</button>
    <button class="approved-tab">Approved</button>
    <button class="rejected-tab">Rejected</button>
</div>

<div class="request-container">

    <!-- LEFT SIDE -->
    <div class="request-list">

        <!-- ================= PENDING ================= -->
        <div class="tab-content" data-tab="pending" style="display:block;">

            <!-- Mabutin -->
            <div class="request-card">
                <div class="request-user">
                    <img src="../assets/FrancineJoy.png">
                    <div>
                        <h3>Francine Mabutin</h3>
                        <p>2025-01111-MN-0</p>
                    </div>
                </div>

                <div class="request-room">
                    <h3>COMLAB 202</h3>
                    <p>March 22, 2026</p>
                    <span>9:00AM - 11:00AM</span>
                </div>

                <div class="request-purpose">
                    <h3>Purpose</h3>
                    <p>Research</p>
                </div>

                <div class="request-actions">
                    <div class="action-buttons">
                        <button class="approve-btn action-btn"
                            data-action="approve"
                            data-name="Francine Joy D. Mabutin"
                            data-room="COMLAB 202"
                            data-date="March 22, 2026"
                            data-time="9:00AM - 11:00AM"
                            data-purpose="Research">
                            Approve
                        </button>

                        <button class="reject-btn action-btn"
                            data-action="reject"
                            data-name="Francine Joy D. Mabutin"
                            data-room="COMLAB 202"
                            data-date="March 22, 2026"
                            data-time="9:00AM - 11:00AM"
                            data-purpose="Research">
                            Reject
                        </button>
                    </div>

                    <button class="details-btn"
                        data-name="Francine Joy D. Mabutin"
                        data-room="COMLAB 202"
                        data-date="March 22, 2026"
                        data-time="9:00AM - 11:00AM"
                        data-purpose="Research">
                        View Details
                    </button>
                </div>
            </div>

            <!-- Piczon -->
            <div class="request-card">
                <div class="request-user">
                    
                    <img src="../assets/Rugilzon.png">
                    <div>
                        <h3>Rugilzon Piczon</h3>
                        <p>2025-02222-MN-0</p>
                    </div>
                </div>

                <div class="request-room">
                    <h3>COMLAB 203</h3>
                    <p>March 22, 2026</p>
                    <span>1:00PM - 3:00PM</span>
                </div>

                <div class="request-purpose">
                    <h3>Purpose</h3>
                    <p>Presentation</p>
                </div>

                <div class="request-actions">
                    <div class="action-buttons">
                        <button class="approve-btn action-btn"
                            data-action="approve"
                            data-name="Rugilzon Piczon"
                            data-room="COMLAB 203"
                            data-date="March 22, 2026"
                            data-time="1:00PM - 3:00PM"
                            data-purpose="Presentation">
                            Approve
                        </button>

                        <button class="reject-btn action-btn"
                            data-action="reject"
                            data-name="Rugilzon Piczon"
                            data-room="COMLAB 203"
                            data-date="March 22, 2026"
                            data-time="1:00PM - 3:00PM"
                            data-purpose="Presentation">
                            Reject
                        </button>
                    </div>

                    <button class="details-btn"
                        data-name="Rugilzon Piczon"
                        data-img="../assets/Rugilzon.png"
                        data-room="COMLAB 203"
                        data-date="March 22, 2026"
                        data-time="1:00PM - 3:00PM"
                        data-purpose="Presentation">
                        View Details
                    </button>
                </div>
            </div>

            <!-- Miole -->
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
                        data-img="../assets/AngelHearth.png"
                        data-room="COMLAB 201"
                        data-date="March 21, 2026"
                        data-time="1:00PM - 3:00PM"
                        data-purpose="Group Meeting">
                        View Details
                    </button>
                </div>
            </div>

            <!-- Perez -->
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
                            data-name="Dane Macnel Perez"
                            data-room="COMLAB 208"
                            data-date="March 21, 2026"
                            data-time="2:00PM - 10:00PM"
                            data-purpose="Class Discussion">
                            Approve
                        </button>

                        <button class="reject-btn action-btn"
                            data-action="reject"
                            data-name="Dane Macnel Perez"
                            data-room="COMLAB 208"
                            data-date="March 21, 2026"
                            data-time="2:00PM - 10:00PM"
                            data-purpose="Class Discussion">
                            Reject
                        </button>
                    </div>

                    <button class="details-btn"
                        data-name="Dane Macnel Perez"
                        data-img="../assets/DaneMacnel.png"
                        data-room="COMLAB 208"
                        data-date="March 21, 2026"
                        data-time="2:00PM - 10:00PM"
                        data-purpose="Class Discussion">
                        View Details
                    </button>
                </div>
            </div>

        </div>

        <!-- ================= APPROVED ================= -->
        <div class="tab-content" data-tab="approved" style="display:none;">
            <div class="request-list"></div>
        </div>

        <!-- ================= REJECTED ================= -->
        <div class="tab-content" data-tab="rejected" style="display:none;">
            <div class="request-list"></div>
        </div>

    </div>

    <!-- RIGHT SIDE -->
<div class="request-details" id="requestDetails">
    <h2>Request Details</h2>

    <div class="details-profile">
        <img src="../assets/FrancineJoy.png" id="detailImg">
        <div>
            <h3 id="detailName">Francine Joy D. Mabutin</h3>
            <p id="detailId">2025-01111-MN-0</p>
            <span class="pending-status">Pending</span>
        </div>
    </div>

    <div class="details-info">
        <div class="info-group">
            <label>Room</label>
            <p id="detailRoom">COMLAB 202</p>
        </div>
        <div class="info-group">
            <label>Date</label>
            <p id="detailDate">March 22, 2026</p>
        </div>
        <div class="info-group">
            <label>Time</label>
            <p id="detailTime">9:00AM - 11:00AM</p>
        </div>
        <div class="info-group">
            <label>Purpose</label>
            <p id="detailPurpose">Research</p>
        </div>
    </div>

    <div class="notes-box">
        <label>Admin Notes</label>
        <textarea placeholder="Add notes here..."></textarea>
    </div>

    <div class="details-buttons">
        <button class="reject-btn" id="detailRejectBtn">Reject</button>
        <button class="approve-btn" id="detailApproveBtn">Approve</button>
    </div>
</div>


</div><script>
document.addEventListener("DOMContentLoaded", function () {

    let selectedCard = null;
    const detailsPanel = document.getElementById('requestDetails');

    // ===== OPEN DETAILS =====
    document.querySelectorAll('.details-btn').forEach(btn => {
        btn.addEventListener('click', () => {

            detailsPanel.classList.add('active');

            // Update all detail fields
            document.getElementById('detailName').innerText = btn.dataset.name;
            document.getElementById('detailId').innerText = btn.dataset.id || '';
            document.getElementById('detailRoom').innerText = btn.dataset.room;
            document.getElementById('detailDate').innerText = btn.dataset.date;
            document.getElementById('detailTime').innerText = btn.dataset.time;
            document.getElementById('detailPurpose').innerText = btn.dataset.purpose;

            // Update profile image
            const imgEl = document.getElementById('detailImg');
            if (btn.dataset.img) {
                imgEl.src = btn.dataset.img;
            }

            selectedCard = btn.closest('.request-card');
        });
    });

    // ===== DETAIL PANEL BUTTONS =====
    document.getElementById('detailApproveBtn').addEventListener('click', () => {
        if (!selectedCard) return;
        const approvedList = document.querySelector('[data-tab="approved"] .request-list');
        selectedCard.dataset.status = "approved";
selectedCard.classList.add("locked-card");

// remove buttons properly (optional extra safety)
selectedCard.querySelectorAll('.action-buttons').forEach(el => el.remove());

approvedList.appendChild(selectedCard);
        detailsPanel.classList.remove('active');
        selectedCard = null;
    });

    document.getElementById('detailRejectBtn').addEventListener('click', () => {
        if (!selectedCard) return;
        const rejectedList = document.querySelector('[data-tab="rejected"] .request-list');
        selectedCard.dataset.status = "rejected";
        selectedCard.classList.add("locked-card");
        rejectedList.appendChild(selectedCard);
        detailsPanel.classList.remove('active');
        selectedCard = null;
    });

    // ===== OPEN MODAL (APPROVE / REJECT from card) =====
    document.querySelectorAll('.action-btn').forEach(btn => {
        btn.addEventListener('click', () => {

            selectedCard = btn.closest('.request-card');

            const modal = document.getElementById('modalOverlay');
            modal.style.display = "flex";

            document.getElementById('mName').innerText = btn.dataset.name;
            document.getElementById('mRoom').innerText = btn.dataset.room;
            document.getElementById('mDate').innerText = btn.dataset.date;
            document.getElementById('mTime').innerText = btn.dataset.time;
            document.getElementById('mPurpose').innerText = btn.dataset.purpose;

            const title = document.getElementById('modalTitle');
            const confirmBtn = document.getElementById('confirmBtn');
            const rejectFields = document.getElementById('rejectFields');

            if (btn.dataset.action === "approve") {
                title.innerText = "Approve Request";
                confirmBtn.innerText = "Yes, Approve";
                confirmBtn.dataset.action = "approve";
                rejectFields.style.display = "none";
            } else {
                title.innerText = "Reject Request";
                confirmBtn.innerText = "Yes, Reject";
                confirmBtn.dataset.action = "reject";
                rejectFields.style.display = "block";
            }
        });
    });

    // ===== CONFIRM ACTION (modal) =====
    document.getElementById('confirmBtn').addEventListener('click', function () {

        if (!selectedCard) return;

        const action = this.dataset.action;
        const approvedList = document.querySelector('[data-tab="approved"] .request-list');
        const rejectedList = document.querySelector('[data-tab="rejected"] .request-list');

        if (action === "approve") {
            approvedList.appendChild(selectedCard);
        } else {
            rejectedList.appendChild(selectedCard);
        }

        document.getElementById('modalOverlay').style.display = "none";
        detailsPanel.classList.remove('active');
        selectedCard = null;
    });

    // ===== TABS =====
    const tabs = document.querySelectorAll('.request-tabs button');
    const tabContents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.style.borderBottom = "none");
            tab.style.borderBottom = "3px solid currentColor";

            tabContents.forEach(c => c.style.display = "none");

            if (tab.classList.contains('pending-tab')) {
                document.querySelector('[data-tab="pending"]').style.display = "block";
            }
            if (tab.classList.contains('approved-tab')) {
                document.querySelector('[data-tab="approved"]').style.display = "block";
            }
            if (tab.classList.contains('rejected-tab')) {
                document.querySelector('[data-tab="rejected"]').style.display = "block";
            }
        });
    });

});

function closeModal() {
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