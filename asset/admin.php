<?php
    $user = $_POST["username"];
    $password = $_POST["password"];

    $con = mysqli_connect("localhost", "root", "", "TRAVEL_TOUR");

    if($con){
        $sql = "SELECT * FROM admin WHERE username = '$user' AND password = '$password'";
        
        if($result = mysqli_query($con,$sql)){
            if(mysqli_num_rows($result) > 0){
                include 'db.php';
            }
            else{
                $add=include 'admin.html';
                echo "Please enter correct username and password";
                echo '<script>alert("Please enter correct username and password")</script>';
                echo '<script>window.history.back();</script>';
            }
        }
        else{
            echo "Not OKK!!";
        }
        
    }
    else{
        echo "Not OKK!!";
    }

?>