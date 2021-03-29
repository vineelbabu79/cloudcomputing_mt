<?php

include "dbconnect.php";

?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
        <form method="POST" action="show_pullresults.php">
            <button type="submit" name="hshd10" class="button10">Show data for #10</button>
        </form>
        <form method="POST" action="show_pullresults.php">
            <label>Enter household Number:</label>
            <input type="text" name="hshd_random"required>
            <button type="submit" name="hshd_button">Go</button>
        </form>

        <p style="font-size: 20px;">Upload 2021 data below:</p>
        <form method="POST" action="action_page.php">
                <button type="submit" class="button10">Go to Upload page</button>
        </form>
        </div>
    </body>
</html>