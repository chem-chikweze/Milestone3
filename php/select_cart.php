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
$sql = "SELECT * FROM CART";
$result = $conn->query($sql);
if($result->num_rows > 0){

?>
   <table class="table table-striped">
      <tr>
         <th>CARTID</th>
         <th>ANIMALSCNAME</th>
         <th>PLANTSCNAME</th>
      </tr>
<?php
$i =0;
while($row = mysqli_fetch_array($result)){

   ?>
   <tr>          <td><?php echo $row['CUSTCARTID'];?></td>
         <td><?php echo $row['ANIMALSCNAME']; ?></td>
<td><?php echo $row['PLANTSCNAME']; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else {
echo "Nothing to display";
}
?>


<a href = "http://betaweb.csug.rochester.edu/~cchikwez/"> Go Back </a>
<?php
$conn->close();
?>

</body>
</html>