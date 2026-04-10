<?php 
session_start(); 
// Grab the name from the login form
if(isset($_POST['uname'])) { 
    $_SESSION['user'] = $_POST['uname']; 
} 
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><a href="index.php">HOME</a></header>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
        <p>Please read the instructions carefully:</p>
        <ul style="text-align: left;">
            <li>Answer all 4 questions.</li>
            <li>Each correct answer is 1 mark.</li>
        </ul>
        <a href="topics.php" class="btn">Start Assessment</a>
    </div>
</body>
</html>