<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/c$
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/c$
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.$</head>
<body>

<?php
require_once('db_setup.php');
$sql = "USE cchikwez_1;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}

// Query:
$ANIMALSCNAME = $_POST['FARANIMALSCNAMEMID'];
$NAME = $_POST['NAME'];
$PRICE = $_POST['PRICE'];
$AMOUNTSALE = $_POST['AMOUNTSALE'];
$AMOUNT = $_POST['AMOUNT'];
$UNIT = $_POST['UNIT'];
$sql = "INSERT INTO ANIMAL values ('$ANIMALSCNAME', '$NAME', '$PRICE', '$AMOUNTSALE', '$AMOUNT', '$UNIT')";


#$sql = "SELECT * FROM Students where Username like 'amai2';";
$result = $conn->query($sql);

if ($result === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//$stmt = $conn->prepare("Select * from Students Where Username like ?");
//$stmt->bind_param("s", $username);
//$result = $stmt->execute();
//$result = $conn->query($sql);
?>

<?php
$conn->close();
?>

</body>
</html>

