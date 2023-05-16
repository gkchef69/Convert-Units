<?php $title = 'Convert Units'; ?>

<?php include 'include_files/header.php'; ?>

<?php

//read from db

$query = "SELECT * FROM items";
$result = mysqli_query($conn, $query);
$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

// var_dump($items);
// echo "<'br'>";
// echo "<'br'>";
// echo "<'br'>";
// print_r($items[0]);
//foreach ($items as $kati) {echo $kati["item"];}



?>

<div class="container">

    <h1>Convert Units</h1>
</div>
<br><br>
<hr>
<br><br>
<div class="form">
    <form method="POST" action="" class="row gy-2 gx-4 align-items-center">

        <div class="col-auto add item_name">
            <label class="visually" for="autoSizingInput">Select a Item</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-arrow-left-right"></i></div>
                <!--  -->
                <input class="search_drdw" placeholder="Select a Item" name="item_name" list=text_editors>
                <datalist id="text_editors">
                    <!--  -->
                    <select multiple size=8 name="item_name" class="form-select" aria-label="Default select example">
                        <option class="placeholder" value="" disabled selected hidden>Select Item</option>
                        <?php foreach ($items as $kati) : ?>
                            <option value="<?php echo $kati['item']; ?>" ><?php echo $kati["item"]; ?></option>
                        <?php endforeach; ?>
                    </select>
            </div>
        </div>

        <div class="col-auto add quantity">
            <label class="visually" for="autoSizingInputGroup">Quantity</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-basket2"></i></div>
                <input type="number" class="form-control" id="autoSizingInput" placeholder="Quantity" value="">
            </div>
        </div>

        <div class="col-auto add from">
            <label class="visually" for="autoSizingInput">From</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-arrow-left-right"></i></div>
                <select class="form-select" aria-label="Default select example">
                    <option class="placeholder" value="" disabled selected hidden>Select Unit</option>
                    <option value="kg">Kilogram</option>
                    <option value="grams">Grams</option>
                    <option value="oz">Ounce</option>
                    <option value="liter">Liters</option>
                    <option value="milliliter">Milliliter</option>
                    <option value="tablespoons">Tablespoons</option>
                    <option value="teaspoons">Teaspoon</option>
                    <option value="cups">Cup</option>
                    <option value="glasses">Glass</option>
                </select>
            </div>
        </div>
        <div class="col-auto add to">
            <label class="visually" for="autoSizingInput">To</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-arrow-left-right"></i></div>
                <select class="form-select" aria-label="Default select example">
                    <option class="placeholder" value="" disabled selected hidden>Select Unit</option>
                    <option value="kg">Kilogram</option>
                    <option value="grams">Grams</option>
                    <option value="oz">Ounce</option>
                    <option value="liter">Liters</option>
                    <option value="milliliter">Milliliter</option>
                    <option value="tablespoons">Tablespoons</option>
                    <option value="teaspoons">Teaspoon</option>
                    <option value="cups">Cup</option>
                    <option value="glasses">Glass</option>
                </select>
            </div>
        </div>

        <div class="col-auto button">
            <input name="submit" type="submit" class="btn btn-primary" value="Calculated">
        </div>
    </form>
</div>

<?php

if (isset($_POST['submit'])) {
    $item = $_POST["item_name"];
    echo $item;





    // Retrieve form data
    // $item_name = $_POST['item'];
    // $kilogram = $_POST['kilogram'];
    // $grams = $_POST['grams'];
    // $oz = $_POST['oz'];
    // $liter = $_POST['liter'];
    // $milliliter = $_POST['milliliter'];
    // $tbsp = $_POST['tbsp'];
    // $tsp = $_POST['tsp'];
    // $cups = $_POST['cups'];
    // $glass = $_POST['glass'];
}
?>


<?php include './include_files/footer.php'; ?>