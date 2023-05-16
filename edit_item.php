<?php $title = 'Edit Item'; ?>

<?php include 'include_files/header.php'; ?>

<div class="container">

    <h1>Edit Item</h1>

    <?php

    if (isset($_POST['item_s']) && !empty($_POST['item_s'])) {
        $item_name = $_POST['item_s'];

        $sql = "SELECT * FROM items WHERE item='" . $item_name . "'";
        $result = mysqli_query($conn, $sql);
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // loop through the $items array and access the columns of each row
        foreach ($items as $index => $row) {
            $id = $row['id'];
            $item = $row['item'];
            $kg = $row['kg'];
            $grams = $row['grams'];
            $oz = $row['oz'];
            $liter = $row['liter'];
            $milliliters = $row['milliliters'];
            $tablespoons = $row['tablespoons'];
            $teaspoons = $row['teaspoons'];
            $cups = $row['cups'];
            $glasses = $row['glasses'];
        }

    ?>

</div>
<br><br>
<hr><br><br>
<div class="form">
    <form method="POST" action="update.php" class="row gy-2 gx-4 align-items-center">
        <div class="col-auto add kg">
            <label class="visually" for="autoSizingInputGroup">id</label>
            <div class="input-group">
                <div class="input-group-text">id</div>
                <input name="id" readonly type="number" class="form-control" id="autoSizingInput" placeholder="id" value="<?php echo $id; ?>" readonly>
            </div>
        </div>
        <div class="col-auto add item_name">
            <label class="visually" for="autoSizingInput">Item Name</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-arrow-left-right"></i></div>
                <input name="item" type="text" class="form-control" id="autoSizingInput" placeholder="Item Name" value="<?php echo $item; ?>">
            </div>
        </div>

        <div class="col-auto add kg">
            <label class="visually" for="autoSizingInputGroup">Kilogram</label>
            <div class="input-group">
                <div class="input-group-text">Kg</div>
                <input name="kilogram" type="number" step="0.001" class="form-control" id="autoSizingInput" placeholder="Kilogram" value="<?php echo $kg; ?>" readonly>
            </div>
        </div>
        <div class="col-auto add grams">
            <label class="visually" for="autoSizingInputGroup">Grams</label>
            <div class="input-group">
                <div class="input-group-text">Gr</div>
                <input name="grams" type="number" step="0.001" class="form-control" id="autoSizingInput" placeholder="Grams" value="<?php echo $grams; ?>" readonly>
            </div>
        </div>
        <div class="col-auto add oz">
            <label class="visually" for="autoSizingInputGroup">Oz</label>
            <div class="input-group">
                <div class="input-group-text">Oz</div>
                <input name="oz" type="number" step="0.001" class="form-control" id="autoSizingInput" placeholder="Oz" value="<?php echo $oz; ?>" readonly>
            </div>
        </div>
        <div class="col-auto add liter">
            <label class="visually" for="autoSizingInputGroup">Liter</label>
            <div class="input-group">
                <div class="input-group-text">Lt</div>
                <input name="liter" step="any" step="0.001" type="number" class="form-control" id="autoSizingInput" placeholder="Liter" value="<?php echo $liter; ?>">
            </div>
        </div>
        <div class="col-auto add milliliters">
            <label class="visually" for="autoSizingInputGroup">Milliliters</label>
            <div class="input-group">
                <div class="input-group-text">Ml</div>
                <input name="milliliters" step="any" step="0.001" type="number" class="form-control" id="autoSizingInput" placeholder="Milliliter" value="<?php echo $milliliters; ?>">
            </div>
        </div>
        <div class="col-auto add cups">
            <label class="visually" for="autoSizingInputGroup">Cups</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi-cup"></i></div>
                <input name="cups" step="any" step="0.001" type="number" class="form-control" id="autoSizingInput" placeholder="Cups" value="<?php echo $cups; ?>">
            </div>
        </div>
        <div class="col-auto add glass teaspoons">
            <label class="visually" for="autoSizingInputGroup">Teaspoons</label>
            <div class="input-group">
                <div class="input-group-text">Tsp</div>
                <input name="teaspoons" step="any" step="0.001" type="number" class="form-control" id="autoSizingInput" placeholder="Teaspoons" value="<?php echo $teaspoons; ?>">
            </div>
        </div>
        <div class="col-auto add glass tablespoons ">
            <label class="visually" for="autoSizingInputGroup">Tablespoons</label>
            <div class="input-group">
                <div class="input-group-text">Tbsp</div>
                <input name="tablespoons" step="any" step="0.001" name="tsp" type="number" class="form-control" id="autoSizingInput" placeholder="Tablespoons" value="<?php echo $tablespoons; ?>">
            </div>
        </div>
        <div class="col-auto add glass">
            <label class="visually" for="autoSizingInputGroup">Glass</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-cup-straw"></i></div>
                <input name="glasses" step="any" step="0.001" type="number" class="form-control" id="autoSizingInput" placeholder="Glass" value="<?php echo $glasses; ?>">
            </div>
        </div>

        <div class="col-auto button">
            <button name="submit" type="submit" class="btn btn-primary">Save Change</button>
        </div>
    </form>
</div>

<div class="message">
<?php } else {
        header('Location: choice_edit_item.php?message=update_not_ok');
    }
?>
</div>

<?php include './include_files/footer.php'; ?>