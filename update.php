<?php $title = 'Edit Item'; ?>

<?php include 'config/connect_db.php'; ?>


<?php

//Retrieve form data
$id = $_POST['id'];
$item_name = $_POST['item'];
$kilogram = $_POST['kilogram'];
$grams = $_POST['grams'];
$oz = $_POST['oz'];
$liter = $_POST['liter'];
$milliliters = $_POST['milliliters'];
$tablespoons = $_POST['tablespoons'];
$teaspoons = $_POST['teaspoons'];
$cups = $_POST['cups'];
$glasses = $_POST['glasses'];

// Insert form data into database
$sql = "UPDATE items SET item ='$item_name', kg = $kilogram, grams = $grams, oz = $oz, liter = $liter, milliliters = $milliliters, tablespoons = $tablespoons, teaspoons = $teaspoons, cups = $cups, glasses = $glasses  WHERE id = $id";
$result = mysqli_query($conn, $sql);

// echo $result;
if ($result == 1) {
    // Redirect the user back to the original form
    header('Location: choice_edit_item.php?message=update_ok');
    // message
    echo 'update ok';
}else{
    // Redirect the user back to the original form
    header('Location: choice_edit_item.php?message=update_not_ok');
    // message
    echo 'update not ok';
}

?>