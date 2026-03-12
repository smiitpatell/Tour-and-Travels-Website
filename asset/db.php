<?php
// Create a connection to the database
$conn = mysqli_connect("localhost", "root", "", "TRAVEL_TOUR");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch user data from 9 columns
$sql = "SELECT * FROM userdata";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Add CSS and JavaScript styles
    echo '<style>
            table {
                width: 90%;
                margin: 20px auto;
                border-collapse: collapse;
                font-family: Arial, sans-serif;
            }
            th, td {
                padding: 12px;
                text-align: left;
                border: 1px solid #ddd;
            }
            th {
                background-color: #ed9e14;
                color: white;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            tr:hover {
                background-color: #ddd;
            }
            h2 {
                text-align: center;
                font-family: Arial, sans-serif;
                color: #333;
            }
        
        </style>';

    // Add a title
    echo "<h2>User Data</h2>";

    // Start the table and add headers
    echo "<table>";
    echo "<tr>";
    echo "<th>Full Name</th>";
    echo "<th>Email Address</th>";
    echo "<th>Mobile Number</th>";
    echo "<th>Duration</th>";
    echo "<th>Place</th>";
    echo "<th>Age</th>";
    echo "<th>Journey Date</th>";
    echo "<th>Journey End</th>";
    echo "<th>Description</th>";
    echo "</tr>";

    // Fetch rows and display data in table format
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["NAME"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["EMAIL_ID"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["MOBILE_NUMBER"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["DURATION"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["PLACE"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["AGE"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["JOURNEY_START"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["JOURNEY_END"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["DESCRIPTION"]) . "</td>";
        echo "</tr>";
    }

    // End the table
    echo "</table>";

} else {
    echo "No data found";
}

// Close the database connection
$conn->close();
?>

