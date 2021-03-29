<?php

include "dbconnect.php";

   if(isset($_POST['signup'])){
        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $email = $_POST['email'];

        $ins = mysqli_query($conn, "INSERT INTO signup (username, password, email) VALUES ('$uname', '$pass', '$email')");

        if(!$ins){
           echo mysqli_errno($ins);
           echo mysqli_error($ins);
        }
        else{
            readfile("landing.php");
        }

        mysqli_close($conn);
    }

    if(isset($_POST['login'])){
        $name = $_POST['uname'];
        $pwd = $_POST['pwd'];

        $res = mysqli_query($conn, "SELECT * FROM signup WHERE username='$name' AND password='$pwd'");

        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
        $count = mysqli_num_rows($res);

        if($count == 1){
            readfile("landing.php");
        }
        else{
            echo "<html><head><link rel='stylesheet' href='style.css'></head><body><div class='container'><p style='font-family:Calibri; font-size:20px'>Invalid Username 
or Password</p></div></body></html>";
        }
        mysqli_close($conn);
    }
?>