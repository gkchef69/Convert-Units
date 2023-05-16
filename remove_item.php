<?php $title = 'Delete Item'; ?>

<?php include 'include_files/header.php'; ?>

<div class="container">

    <h1>Delete Item</h1>
</div>

<br><br>
<hr>
<br><br>
<div class="form">
    <form class="row gy-2 gx-4 align-items-center">
        <div class="col-auto add item_name">
            <label class="visually" for="autoSizingInput">Select a Item</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-arrow-left-right"></i></div>
                <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="milk">Milk</option>
                    <option value="sugar">Sugar</option>
                    <option value="juice">Juice</option>
                </select>
            </div>
        </div>

        <div class="col-auto button">
            <button type="submit" class="btn btn-primary">Delete</button>
        </div>
    </form>
</div>

<?php include './include_files/footer.php'; ?>