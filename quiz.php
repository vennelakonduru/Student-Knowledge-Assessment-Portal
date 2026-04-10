<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <header><a href="index.php">HOME</a></header>
    <div class="container" style="text-align: left;">
        <h2 style="text-align: center;">Topic: <?php echo $_GET['topic']; ?></h2>
        <form action="result.php" method="POST">
            <input type="hidden" name="topic" value="<?php echo $_GET['topic']; ?>">

            <div class="quiz-q">
                <p><b>1. What does <?php echo $_GET['topic']; ?> primarily deal with?</b></p>
                <input type="radio" name="q1" value="1" required> Structure/Logic <br>
                <input type="radio" name="q1" value="0"> Hardware
            </div>
            <div class="quiz-q">
                <p><b>2. Is this a core web technology?</b></p>
                <input type="radio" name="q2" value="1" required> Yes <br>
                <input type="radio" name="q2" value="0"> No
            </div>
            <div class="quiz-q">
                <p><b>3. Is it maintained by W3C/ECMA?</b></p>
                <input type="radio" name="q3" value="1" required> Yes <br>
                <input type="radio" name="q3" value="0"> No
            </div>
            <div class="quiz-q">
                <p><b>4. Does it run on the client side?</b></p>
                <input type="radio" name="q4" value="1" required> Yes <br>
                <input type="radio" name="q4" value="0"> No
            </div>
            <button type="submit" class="btn" style="width:100%">Submit My Answers</button>
        </form>
    </div>
</body>
</html>