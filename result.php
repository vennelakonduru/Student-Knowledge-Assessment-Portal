<?php 
session_start();
include('db.php'); 

// 1. Get the scores from the form
$s1 = $_POST['q1']; 
$s2 = $_POST['q2']; 
$s3 = $_POST['q3']; 
$s4 = $_POST['q4']; 

// 2. Add them together
$final_score = $s1 + $s2 + $s3 + $s4;
$user = $_SESSION['user'];
$subject = $_POST['topic'];

// 3. Save to Database
mysqli_query($conn, "INSERT INTO leaderboard (name, score, roll_no) VALUES ('$user', '$final_score', '$subject')");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><a href="index.php">HOME</a></header>

    <div class="container">
        <h1>Assessment Complete!</h1>
        <h2 style="font-size: 50px; color: #27ae60;"><?php echo $final_score; ?> / 4</h2>
        <p>Well done, <b><?php echo $user; ?></b>!</p>
        <a href="leaderboard.php" class="btn">Check Rankings</a>
    </div>
</body>
</html>