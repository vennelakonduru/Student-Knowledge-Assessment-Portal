<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Home - SKAP Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div style="float: left; color: white; padding-left: 20px; font-size: 20px; font-weight:bold; position: absolute;">SKAP Portal</div>
        <a href="index.php">HOME</a> 
        <a href="login.php">LOGIN</a> 
        <a href="leaderboard.php">RANKINGS</a>
    </header>

    <div class="hero">
        <h1>Student Knowledge Assessment Portal</h1>
        <p>Test your proficiency in modern web technologies with our structured quiz modules.</p>
        <a href="login.php" class="btn btn-green">Login to Start</a>
    </div>

    <div class="features-container">
        <div class="feature-box">
            <h3 style="color: #e67e22;">HTML5</h3>
            <p>Master tags, forms, tables, and the structure of the modern web.</p>
        </div>
        <div class="feature-box">
            <h3 style="color: #2980b9;">CSS3</h3>
            <p>Learn styling, box models, animations, and responsive layouts.</p>
        </div>
        <div class="feature-box">
            <h3 style="color: #27ae60;">JavaScript</h3>
            <p>Understand logic, cookies, DOM manipulation, and functions.</p>
        </div>
    </div>

    <div class="contact-section">
        <h2 style="color: #2c3e50; margin-bottom: 10px;">Contact Our Team</h2>
        <div class="blue-divider"></div>
        <p style="color: #555; font-size: 16px;">
            24eu4096@vrsec.ac.in | 24eu04132@vrsec.ac.in | 24eu04077@vrsec.ac.in
        </p>
    </div>

    <footer>
        <p style="margin: 0; opacity: 0.8;">&copy; 2026 Student Assessment Portal | VRSEC Project</p>
    </footer>
</body>
</html>