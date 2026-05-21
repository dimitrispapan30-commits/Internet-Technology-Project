<?php
include 'db.php';

$sql = "SELECT * FROM products";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Προϊόντα</title>
</head>

<body>

<h1>Λίστα Προϊόντων</h1>
<link rel="stylesheet" href="style.css">
<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Όνομα</th>
    <th>Κατηγορία</th>
    <th>Ποσότητα</th>
    <th>Προμηθευτής</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['category']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['supplier']; ?></td>
</tr>

<?php
}
?>

</table>

<br>

<a href="index.php">Αρχική Σελίδα</a>

</body>
</html>