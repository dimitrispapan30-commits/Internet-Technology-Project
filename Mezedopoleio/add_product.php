<?php
include 'db.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $supplier = $_POST['supplier'];

    $sql = "INSERT INTO products (name, category, quantity, supplier)
            VALUES ('$name', '$category', '$quantity', '$supplier')";

    if(mysqli_query($conn, $sql)){
        echo "Το προϊόν προστέθηκε επιτυχώς!";
    } else {
        echo "Σφάλμα κατά την εισαγωγή.";
    }
}
?>

<h1>Προσθήκη Προϊόντος</h1>
<link rel="stylesheet" href="style.css">
<form method="POST">
    <input type="text" name="name" placeholder="Όνομα προϊόντος" required><br><br>

    <input type="text" name="category" placeholder="Κατηγορία" required><br><br>

    <input type="number" name="quantity" placeholder="Ποσότητα" required><br><br>

    <input type="text" name="supplier" placeholder="Προμηθευτής" required><br><br>

    <button type="submit" name="submit">Αποθήκευση</button>
</form>

<br>
<a href="index.php">Πίσω στην αρχική</a>