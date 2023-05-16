<?php $title = 'Add Item'; ?>

<?php include 'include_files/header.php'; ?>


<div class="container">
    <h1>Add Items</h1>
</div>

<br><br>
<hr>
<br><br>
<div class="form">
    <form action="" method="POST" class="row gy-2 gx-4 align-items-center">
        <div class="col-auto add item_name">
            <label class="visually-hidden" for="autoSizingInput">Item Name</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-arrow-left-right"></i></div>
                <input name="item" type="text" class="form-control" id="autoSizingInput" placeholder="Item Name">
            </div>
        </div>

        <div class="col-auto add kg">
            <label class="visually-hidden" for="autoSizingInputGroup">Kilogram</label>
            <div class="input-group">
                <div class="input-group-text">Kg</div>
                <input name="kilogram" type="number" step="0.001"  class="form-control" id="autoSizingInput" placeholder="Kilogram" value="1" readonly>
            </div>
        </div>
        <div class="col-auto add grams">
            <label class="visually-hidden" for="autoSizingInputGroup">Grams</label>
            <div class="input-group">
                <div class="input-group-text">Gr</div>
                <input name="grams" type="number" step="0.001"  class="form-control" id="autoSizingInput" placeholder="Grams" value="1000" readonly>
            </div>
        </div>
        <div class="col-auto add oz">
            <label class="visually-hidden" for="autoSizingInputGroup">Oz</label>
            <div class="input-group">
                <div class="input-group-text">Oz</div>
                <input name="oz" type="number" step="0.001"  class="form-control" id="autoSizingInput" placeholder="Oz" value="35.274" readonly>
            </div>
        </div>
        <div class="col-auto add liter">
            <label class="visually-hidden" for="autoSizingInputGroup">Liter</label>
            <div class="input-group">
                <div class="input-group-text">Lt</div>
                <input name="liter" type="number" step="0.001"  class="form-control" id="autoSizingInput" placeholder="Liter">
            </div>
        </div>
        <div class="col-auto add milliliters">
            <label class="visually-hidden" for="autoSizingInputGroup">Milliliter</label>
            <div class="input-group">
                <div class="input-group-text">Ml</div>
                <input name="milliliter" type="number" step="0.001"   class="form-control" id="autoSizingInput" placeholder="Milliliter">
            </div>
        </div>
        <div class="col-auto add cups">
            <label class="visually-hidden" for="autoSizingInputGroup">Cups</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi-cup"></i></div>
                <input name="cups" type="number" step="0.001"  class="form-control" id="autoSizingInput" placeholder="Cups">
            </div>
        </div>
        <div class="col-auto add glass">
            <label class="visually-hidden" for="autoSizingInputGroup">Glass</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-cup-straw"></i></div>
                <input name="glass" type="number" step="0.001"  class="form-control" id="autoSizingInput" placeholder="Glass">
            </div>
        </div>
        <div class="col-auto add glass teaspoons">
            <label class="visually-hidden" for="autoSizingInputGroup">Teaspoons</label>
            <div class="input-group">
                <div class="input-group-text">Tsp</div>
                <input name="tsp" type="number" step="0.001"   class="form-control" id="autoSizingInput" placeholder="Teaspoons">
            </div>
        </div>
        <div class="col-auto add glass tablespoons ">
            <label class="visually-hidden" for="autoSizingInputGroup">Tablespoons</label>
            <div class="input-group">
                <div class="input-group-text">Tbsp</div>
                <input name="tbsp" type="number" step="0.001"  class="form-control" id="autoSizingInput" placeholder="Tablespoons">
            </div>
        </div>

        <div class="col-auto button">
            <input name="submit" type="submit" class="btn btn-primary" value="Add Item">
        </div>
    </form>
</div>

<?php 
// Check if form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $item_name = $_POST['item'];
    $kilogram = $_POST['kilogram'];
    $grams = $_POST['grams'];
    $oz = $_POST['oz'];
    $liter = $_POST['liter'];
    $milliliter = $_POST['milliliter'];
    $tbsp = $_POST['tbsp'];
    $tsp = $_POST['tsp'];
    $cups = $_POST['cups'];
    $glass = $_POST['glass'];

    // Insert form data into database
    $sql = "INSERT INTO items (item, kg, grams, oz, liter, milliliters, tablespoons, teaspoons, cups, glasses)
            VALUES ('$item_name', '$kilogram', '$grams', '$oz', '$liter', '$milliliter', '$tbsp', '$tsp', '$cups', '$glass')";
   // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . "Duplicate entry item" . "<br>" . "Αυτο το Υλικό Υπάρχει";
        }
    // Execute a MySQL query
    $sql = "SELECT * FROM items";
    $result = $conn->query($sql);
    //Process the results of the query
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<br>" .
            "ID: " . $row["id"] . 
            "<br>" .
            " - Name: " . $row["item"] .
            "<br>" .
            " - Kg: " . $row["kg"] . 
            "<br>" .
            " - Grams: " . $row["grams"] . 
            "<br>" .
            " - Oz: " . $row["oz"] . 
            "<br>" .
            " - Liters: " . $row["liter"] . 
            "<br>" .
            " - ML: " . $row["milliliters"] . 
            "<br>" .
            " - tbsp: " . $row["tablespoons"] . 
            "<br>" .
            " - tsp: " . $row["teaspoons"] . 
            "<br>" .
            " - Cups: " . $row["cups"] . 
            "<br>" .
            " - Glasses: " . $row["glasses"] . 
            "<br>";
        }
    } else {
        echo "0 results";
    }
        
        // Close the database connection
        $conn->close();
}
?>

<?php include './include_files/footer.php'; ?>