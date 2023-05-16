<?php
$item_s = $_POST['item_s'];
?>
<?php $title = 'Delete Item'; ?>
<?php include 'config/connect_db.php'; ?>
<?php
// Insert form data into database
$sql = "DELETE FROM items WHERE item = '$item_s'";
$result = mysqli_query($conn, $sql);
// echo $result;
if ($result == 1) {
    // Redirect the user back to the original form
    header('Location: choice_edit_item.php?message=delete_ok');
    // message
    // echo 'update ok';
} else {
    // Redirect the user back to the original form
    header('Location: choice_edit_item.php?message=delete_not_ok');
    // message
    // echo 'update not ok';
}
?>