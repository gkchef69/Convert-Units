<?php
$servername = "localhost"; // Replace with your server name or IP address
$username = "convert_units"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "convert_units"; // Replace with the name of your MySQL database

// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "connect was successful";
}

// Execute a MySQL query
// $sql = "SELECT * FROM items";
// $result = $conn->query($sql);

// Process the results of the query
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo 
//         "ID: " . $row["id"] . 
//         "<br>" .
//         " - Name: " . $row["item"] .
//         "<br>" .
//         " - Kg: " . $row["kg"] . 
//         "<br>" .
//         " - Grams: " . $row["grams"] . 
//         "<br>" .
//         " - Oz: " . $row["oz"] . 
//         "<br>" .
//         " - Liters: " . $row["liter"] . 
//         "<br>" .
//         " - ML: " . $row["milliliters"] . 
//         "<br>" .
//         " - tbsp: " . $row["tablespoons"] . 
//         "<br>" .
//         " - tsp: " . $row["teaspoons"] . 
//         "<br>" .
//         " - Cups: " . $row["cups"] . 
//         "<br>" .
//         " - Glasses: " . $row["glasses"] . 
//         "<br>";
//     }
// } else {
//     echo "0 results";
// }

// Close the connection to the MySQL server
// $conn->close();
