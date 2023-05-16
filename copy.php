<?php $title = 'Edit Item'; ?>

<?php include 'include_files/header.php'; ?>

<div class="container">

    <?php
    $query = "SELECT * FROM items";
    $result = mysqli_query($conn, $query);
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($items);
    ?>

    <h1>Choice Item</h1>
    <?php
    if (isset($_GET['message'])) {
        $message = $_GET['message'];
        // echo '< class="m-4">';
        if ($message == 'update_ok') {
            // echo "<p class='alert alert-success alert-dismissible fade show'>Update successful</p>";
            //Success Alert -->
            echo '<div class="alert alert-success alert-dismissible fade show">';
            echo '<strong>Success!</strong> Η επεξεργασία ήταν επιτυχής.';
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
            echo '</div>';
        } else {
            // echo "<p class='alert alert-danger alert-dismissible fade show'>Update failed</p>";
            echo '<div class="alert alert-danger alert-dismissible fade show">';
            echo '<strong>Error!</strong> Επέλεξε ένα είδος από την λίστα και πάτα Edit.';
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
            echo '</div>';
        }
        // echo '</div>';
    }
    ?>
</div>

<br><br>
<hr>
<br><br>
<div class="form">
    <!-- <form method="POST" action="edit_item.php" class="row gy-2 gx-4 align-items-center"> -->
    <form method="post" action="
    <?php  if (isset($_POST['delete_btn'])) {
                echo 'delete.php';
            } 
            elseif (isset($_POST['edit_btn'])) {
                echo 'edit_item.php'; } 
    ?> 
        ">
        
        <div class="col-auto add item_name">
            <label class="visually-hidden" for="autoSizingInput">Item Name</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-arrow-left-right"></i></div>
                <!-- <input name="item" type="text" class="form-control" id="autoSizingInput" placeholder="Item Name"> -->
                <!-- <select name="item" type="text" class="form-control" id="autoSizingInput" placeholder="Item Name">
                    <option value=""></option>
                </select> -->
                <select name="item_s" class="form-control" id="autoSizingInput" placeholder="Item Name">
                    <!-- <option value="Choice">Choice</option> -->
                    <?php foreach ($items as $item) : ?>
                        <option value="<?php echo $item['item']; ?>"> <?php echo $item['item']; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-auto button">
            <!-- <button name="delete" type="submit" class="btn delete btn-danger">Delete</button>
            <button name="edit" type="submit" class="btn edit btn-primary">Edit</button> -->
            <input type="submit" class="btn delete btn-danger" name="delete_btn" value="Delete">
            <input type="submit" class="btn edit btn-primary" name="edit_btn" value="Edit">
        </div>
    </form>
</div>




<?php include './include_files/footer.php'; ?>