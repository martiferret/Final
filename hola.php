<html>
<head>
<title>Wifi Vilafranca</title>
</head>
<body>

<?php
$host = "localhost";
$userName = "root";
$password = "info";
$dbName = "wifi-vilafranca";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$nom = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');








$sql = "INSERT INTO usuaris (nom,email)
VALUES ('$nom', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);








?>
<form method="post" action="hola.php">
Username : <input type="text" name="username"><br><br>
email : <input type="email" name="email"><br><br>
<input type="submit" value="Submit">




</body>




</html>
