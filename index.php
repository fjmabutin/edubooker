<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduBooker</title>
 
    <!-- External CSS -->
    <link rel="stylesheet" href="style/style.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
 
<body class="home">
 
    <!-- NAVBAR -->
    <header class="navbar">
        <div class="left-nav">
            <img src="assets/pupLogo.png" alt="PUP Logo" class="logo">
            <img src="assets/iTechLogo.jpg" alt="iTech Logo" class="logo">
            <h1 class="site-name">EduBooker</h1>
        </div>
 
        <div class="right-nav">
            <a href="#" class="about-link" id="aboutBtn">LEARN MORE ABOUT US</a>
 
            <a href="selectRole.php" class="login-btn">LOGIN</a>
        </div>
    </header>
 
    <!-- HERO IMAGE -->
    <section class="hero-image">
        <img src="assets/schoolBg.jpg" alt="School Background">
    </section>
 
    <!-- HERO CONTENT -->
    <section class="hero-content">
 
        <div class="gradient-left"></div>
        <div class="gradient-right"></div>
 
        <div class="slide-track" id="slideTrack">
 
            <div class="slide-panel">
                <div class="content-container">
                    <h2>
                        Transforming how <br>
                        classrooms are <br>
                        reserved and <br>
                        managed
                    </h2>
 
                    <a href="#" class="works-btn" id="worksBtn">
                        See How It Works →
                    </a>
                </div>
            </div>

            <!-- This is how it works slide -->
            <div class="slide-panel">
                <div class="content-container content-panel-inner">
 
                    <button class="go-back-btn" id="backFromWorks">← Go Back</button>
 
                    <h2 class="panel-title">How It Works</h2>
 
                    <p class="panel-intro">
                        EduBooker simplifies classroom reservations for students, faculty, and administrators.
                    </p>
 
                    <div class="how-steps">
 
                        <div class="how-step">
                            <div class="step-badge">01</div>
                            <div class="step-body">
                                <h3>Browse Available Rooms</h3>
                                <p>View classrooms and facilities that are available for reservation.</p>
                            </div>
                        </div>
 
                        <div class="how-step">
                            <div class="step-badge">02</div>
                            <div class="step-body">
                                <h3>Submit a Reservation Request</h3>
                                <p>Select your preferred room, date, and time, then submit your booking request.</p>
                            </div>
                        </div>
 
                        <div class="how-step">
                            <div class="step-badge">03</div>
                            <div class="step-body">
                                <h3>Approval Process</h3>
                                <p>Administrators review and approve requests to prevent scheduling conflicts.</p>
                            </div>
                        </div>
 
                        <div class="how-step">
                            <div class="step-badge">04</div>
                            <div class="step-body">
                                <h3>Manage Your Bookings</h3>
                                <p>Track reservation status, view schedules, and receive updates in real time.</p>
                            </div>
                        </div>
 
                    </div>
 
                    <p class="panel-cta">Start reserving classrooms efficiently with EduBooker today!</p>
 
                </div>
            </div>
 
            <!-- This is learn more abt us slide -->
            <div class="slide-panel">
                <div class="content-container content-panel-inner">
 
                    <button class="go-back-btn" id="backFromAbout">← Go Back</button>
 
                    <h2 class="panel-title">About EduBooker</h2>
 
                    <p class="panel-intro">
                        EduBooker is a classroom reservation and management platform designed to make
                        scheduling educational spaces simple, organized, and efficient.
                    </p>
 
                    <p class="panel-text">
                        Our goal is to eliminate manual booking processes, reduce scheduling conflicts,
                        and provide a seamless experience for both users and administrators.
                    </p>
 
                    <div class="about-features">
                        <h3 class="features-heading">Our Features</h3>
                        <ul class="features-list">
                            <li>Easy classroom reservation</li>
                            <li>Real-time availability tracking</li>
                            <li>Reservation approval workflow</li>
                            <li>Schedule management</li>
                            <li>User-friendly interface</li>
                        </ul>
                    </div>
 
                    <p class="panel-cta">
                        We are committed to helping educational institutions manage their
                        facilities more effectively through modern technology.
                    </p>
 
                </div>
            </div>
        </div>
 
    </section>
 
    <footer class="site-footer">
        <div class="footer-container">
 
            <div class="footer-col">
                <h3>ABOUT</h3>
                <p class="footer-desc">"Making classroom and room scheduling simple and smart."</p>
                <div class="socials">
                    <a href="#"><img src="assets/igLogo.png" alt="Instagram"></a>
                    <a href="#"><img src="assets/twitterLogo.png" alt="Twitter"></a>
                    <a href="#"><img src="assets/fbLogo.png" alt="Facebook"></a>
                    <a href="#"><img src="assets/linkedinLogo.png" alt="LinkedIn"></a>
                </div>
                <p class="copyright">© 2026 EduBooker. All rights reserved.</p>
            </div>
 
            <div class="footer-col">
                <h3>RESOURCES</h3>
                <a href="#">FAQ</a>
                <a href="#">Documentation / Guides</a>
                <a href="#">System Updates / Blog</a>
                <a href="#">Tutorials</a>
            </div>
 
            <div class="footer-col">
                <h3>SUPPORT</h3>
                <a href="#">Contact Us - official.edubooker@gmail.com</a>
                <a href="#">Report an Issue</a>
                <a href="#">Feedback</a>
            </div>
 
            <div class="footer-col">
                <h3>LEGAL</h3>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookie Policy</a>
            </div>
 
        </div>
    </footer>
    <script src="index.js"></script>
</body>
</html>
