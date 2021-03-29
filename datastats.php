<?php

include "dbconnect.php";

if(isset($_POST['datastats'])){

?>
<html>

<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<form method="POST" action="dashboard.php">
        <button id="dbutton" type="submit" name="q1">How does customer engagement change over time ?</button> <br>
        <button id="dbutton" type="submit" name="q2">Which factors appear to affect the customer engagement ?</button>
</form>

</div>
</body>

</html>

<?php
}

?>