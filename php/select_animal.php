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
$sql = "SELECT * FROM ANIMAL";
$result = $conn->query($sql);
if($result->num_rows > 0){

?>
   <table class="table table-striped">
      <tr>
        <th>ANIMALSCNAME</th> 
         <th>NAME</th>
         <th>PRICE</th>
         <th>AMOUNTSALE</th>
         <th>AMOUNT</th>
         <th>UNIT</th>
      </tr>
<?php
$i =0;
while($row = mysqli_fetch_array($result)){
?>
        <tr>
         <td><?php echo $row['ANIMALSCNAME']; ?></td> 
          <td><?php echo $row['NAME']; ?></td>
          <td><?php echo $row['PRICE']; ?></td>
          <td><?php echo $row['AMOUNTSALE']; ?></td>
          <td><?php echo $row['AMOUNT']; ?></td>
          <td><?php echo $row['UNIT']; ?></td>
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
