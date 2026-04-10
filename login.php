<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <header><a href="index.php">HOME</a></header>
    <div class="container" style="max-width: 400px;">
        <h2>Student Login</h2>
        <form action="instructions.php" method="POST">
            <input type="text" name="uname" placeholder="Enter Name" required style="width:100%; padding:10px; margin:10px 0;">
            <input type="password" name="upass" placeholder="Enter Password" required style="width:100%; padding:10px; margin:10px 0;">
            <button type="submit" class="btn" style="width:100%;">LOGIN</button>
        </form>
    </div>
</body>
</html>
