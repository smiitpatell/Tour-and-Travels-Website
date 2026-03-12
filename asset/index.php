<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $age = $_POST["age"];
    $place = $_POST["place"];
    $days = $_POST["days"];
    $date1 = $_POST["date1"];
    $date2 = $_POST["date2"];
    $description = $_POST["description"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $_SESSION['booking'] = $_POST; // Save to session

    $con = mysqli_connect("localhost", "root", "", "travel_tour");
    if (!$con) {
        die("Database connection failed." . mysqli_connect_error());
    }

    $stmt = $con->prepare("INSERT INTO userdata (NAME, EMAIL_ID, MOBILE_NUMBER, AGE, PLACE, DURATION, JOURNEY_START, JOURNEY_END, DESCRIPTION) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiisiiis", $name, $email, $mobile, $age, $place, $days, $date1, $date2, $description);
    
    if ($stmt->execute()) {
        header("Location: ../pay.html");
        exit();
    } else {
        echo "Error inserting data.". $stmt->error;
    }

    $stmt->close();
    mysqli_close($con);
}
?>
