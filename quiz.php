<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz - SKAP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php">HOME</a>
    </header>

    <div class="container" style="max-width: 700px; text-align: left;">
        <h2 style="text-align: center; color: #2c3e50;">Topic: <?php echo $_GET['topic']; ?></h2>
        <hr>
        
        <form action="result.php" method="POST">
            <input type="hidden" name="topic" value="<?php echo $_GET['topic']; ?>">

            <div style="margin-bottom: 25px;">
                <p><b>1. What is the main purpose of <?php echo $_GET['topic']; ?>?</b></p>
                <input type="radio" name="q1" value="1" required> Web Development <br>
                <input type="radio" name="q1" value="0"> Data Entry <br>
                <input type="radio" name="q1" value="0"> Graphic Design
            </div>

            <div style="margin-bottom: 25px;">
                <p><b>2. Is <?php echo $_GET['topic']; ?> difficult to learn?</b></p>
                <input type="radio" name="q2" value="1"> No, it is beginner-friendly <br>
                <input type="radio" name="q2" value="0"> Yes, extremely hard <br>
                <input type="radio" name="q2" value="0"> It depends on the day
            </div>

            <div style="margin-bottom: 25px;">
                <p><b>3. Do professional developers use <?php echo $_GET['topic']; ?>?</b></p>
                <input type="radio" name="q3" value="1"> Yes, every day <br>
                <input type="radio" name="q3" value="0"> No, never <br>
                <input type="radio" name="q3" value="0"> Only for personal blogs
            </div>

            <div style="margin-bottom: 25px;">
                <p><b>4. Is this assessment helpful?</b></p>
                <input type="radio" name="q4" value="1"> Yes <br>
                <input type="radio" name="q4" value="0"> No <br>
                <input type="radio" name="q4" value="0"> Maybe
            </div>

            <button type="submit" class="btn btn-green">Submit My Answers</button>
        </form>
    </div>
</body>
</html>
