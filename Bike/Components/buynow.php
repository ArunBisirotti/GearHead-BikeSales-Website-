<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bikesales";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize (e.g., using mysqli_real_escape_string)
    $nameoncard = mysqli_real_escape_string($conn, $_POST['nameoncard']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$aadhar = mysqli_real_escape_string($conn, $_POST['aadhar']);
	$dd = mysqli_real_escape_string($conn, $_POST['dd']);
	$mm = mysqli_real_escape_string($conn, $_POST['mm']);
	$yyyy = mysqli_real_escape_string($conn, $_POST['yyyy']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
    // More fields...

    // Insert data into database
    $sql = "INSERT INTO customer_info (nameoncard,email,address,city,aadhar,dd,mm,yyyy,gender) VALUES ('$nameoncard','$email','$address','$city','$aadhar','$dd','$mm','$yyyy','$gender')";
    
	if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Thank you for Ordering</h1></center>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>





<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bikesales";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize (e.g., using mysqli_real_escape_string)
    $nameoncard = mysqli_real_escape_string($conn, $_POST['nameoncard']);
    $aadhar = mysqli_real_escape_string($conn, $_POST['aadhar']);
    $bike = mysqli_real_escape_string($conn, $_POST['bike']);
    $color = mysqli_real_escape_string($conn, $_POST['color']);
    $qty = mysqli_real_escape_string($conn, $_POST['qty']);
    // More fields...

    // Insert data into database
    $sql = "INSERT INTO bike (nameoncard,aadhar,bike,color,qty) VALUES ('$nameoncard','$aadhar','$bike','$color','$qty')";
    
	if ($conn->query($sql) === TRUE) {
        echo "<center><a href='http://localhost/Bike/myData/'><button>Return to Home</button></a></center>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>





<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bikesales";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize (e.g., using mysqli_real_escape_string)
    $nameoncard = mysqli_real_escape_string($conn, $_POST['nameoncard']);
	$pay = mysqli_real_escape_string($conn, $_POST['pay']);
	$ccardno = mysqli_real_escape_string($conn, $_POST['ccardno']);
	$ccvv = mysqli_real_escape_string($conn, $_POST['ccvv']);
	$cexpm = mysqli_real_escape_string($conn, $_POST['cexpm']);
	$cexpy = mysqli_real_escape_string($conn, $_POST['cexpy']);
	$amount = mysqli_real_escape_string($conn, $_POST['amount']);
    // More fields...

    // Insert data into database
    $sql = "INSERT INTO card_details (nameoncard,pay,ccardno,ccvv,cexpm,cexpy,amount) VALUES ('$nameoncard','$pay','$ccardno','$ccvv','$cexpm','$cexpy','$amount')";
    
	if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
