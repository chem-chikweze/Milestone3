<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"$
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.mi$
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384$</head>
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
$CONSUMERID = $_POST['CONSUMERID'];
$sql = "SELECT * FROM CONSUMER where id = $CONSUMERID;";

#$sql = "SELECT * FROM Students where Username like 'amai2';";
$result = $conn->query($sql);

if($result->num_rows > 0){

//$stmt = $conn->prepare("Select * from Students Where Username like ?");
//$stmt->bind_param("s", $username);
//$result = $stmt->execute();
//$result = $conn->query($sql);
?>
   <table class="table table-striped">
      <tr>
        <th>CONSUMERID</th>
         <th>PHONE</th>
         <th>ADDRESS</th>
         <th>AGE</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
      <td><?php echo $row['CONSUMERID'];?></td>
          <td><?php echo $row['PHONE']; ?></td>
          <td><?php echo $row['ADDRESS']; ?></td>
          <td><?php echo $row['AGE']; ?></td>
      </tr>
      <?php
}
}
else {
echo "Item not found";
}
?>

    </table>

<?php
$conn->close();
?>
</body>
</html>
