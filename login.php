<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><a href="index.php">HOME</a></header>
    <div class="container" style="max-width: 400px;">
        <h2>Student Login</h2>
        <form action="instructions.php" method="POST">
            <input type="text" name="uname" placeholder="Enter Your Name" required>
            <input type="password" name="upass" placeholder="Enter Password" required>
            <button type="submit" class="btn">LOGIN</button>
        </form>
    </div>
</body>
</html>