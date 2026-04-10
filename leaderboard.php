<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Rankings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php">HOME</a>
        <a href="leaderboard.php">RANKINGS</a>
    </header>

    <div class="rankings-card">
        <h2>Student Leaderboard</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Topic</th>
                <th>Score</th>
            </tr>
            <?php
            $res = mysqli_query($conn, "SELECT * FROM leaderboard ORDER BY score DESC");
            while($row = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['roll_no']; ?></td>
                    <td style="color: green; font-weight: bold;"><?php echo $row['score']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>