<?php
include 'db.php';

if(isset($_POST['submit'])){

    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $supplier = $_POST['supplier'];

    $sql = "INSERT INTO orders(product_name, quantity, supplier)
            VALUES('$product_name', '$quantity', '$supplier')";

    mysqli_query($conn, $sql);

    echo "Η παραγγελία καταχωρήθηκε!";
}

$result = mysqli_query($conn, "SELECT * FROM orders");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Παραγγελίες</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Παραγγελίες Προμηθευτών</h1>

<form method="POST">

    <input type="text" name="product_name" placeholder="Προϊόν" required><br><br>

    <input type="number" name="quantity" placeholder="Ποσότητα" required><br><br>

    <input type="text" name="supplier" placeholder="Προμηθευτής" required><br><br>

    <button type="submit" name="submit">
        Καταχώρηση Παραγγελίας
    </button>

</form>

<br><br>

<h2>Λίστα Παραγγελιών</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Προϊόν</th>
    <th>Ποσότητα</th>
    <th>Προμηθευτής</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
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