<?php
    include "dbconnect.php";
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
        <p style="font-size: 30px;">Hello there!</p>
        <form method="POST" action="datapull.php">
            <button type="submit" name="datapull">Data Pull</button>
        </form>
        <form method="POST" action="datastats.php">
            <button type="submit" name="datastats">Data Statistics</button>
        </form>
        </div>
    </body>
</html>