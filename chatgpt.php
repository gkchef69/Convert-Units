<!-- Πώς επεξεργαζόμαστε μια εγγραφή στη βάση δεδομένων MySQL επιλέγοντας την εγγραφή από ένα αναπτυσσόμενο πεδίο στην php

Για να επεξεργαστείτε μια εγγραφή στη βάση δεδομένων MySQL επιλέγοντας την εγγραφή από ένα αναπτυσσόμενο πεδίο στην PHP, μπορείτε να ακολουθήσετε αυτά τα γενικά βήματα:

Δημιουργήστε μια φόρμα με ένα αναπτυσσόμενο πεδίο που ανακτά το αναγνωριστικό εγγραφής από τη βάση δεδομένων.
Μόλις υποβληθεί η φόρμα, ανακτήστε το επιλεγμένο αναγνωριστικό εγγραφής από τον πίνακα $_POST στην PHP.
Χρησιμοποιήστε μια δήλωση MySQL SELECT για να ανακτήσετε την εγγραφή από τη βάση δεδομένων με βάση το επιλεγμένο αναγνωριστικό εγγραφής.
Συμπληρώστε τα πεδία της φόρμας με τα δεδομένα εγγραφής που ανακτήθηκαν.
Επιτρέψτε στον χρήστη να κάνει αλλαγές στα πεδία της φόρμας όπως απαιτείται.
Μετά την υποβολή της επεξεργασμένης εγγραφής, χρησιμοποιήστε μια δήλωση MySQL UPDATE για να ενημερώσετε την εγγραφή στη βάση δεδομένων.
Ακολουθεί ένα δείγμα κώδικα που δείχνει αυτά τα βήματα:

Κώδικας HTML/PHP για τη φόρμα:

php

Αντιγραφή κωδικού -->
<form method="post" action="edit_record.php">
    <label for="record_id">Select a record to edit:</label>
    <select id="record_id" name="record_id">
        <?php
        // Retrieve the record IDs and names from the database
        $query = "SELECT id, name FROM records";
        $result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            // Output a <option> tag for each record
            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="Edit Record">
</form>
Κώδικας PHP για το σενάριο edit_record.php:

php

Αντιγραφή κωδικού
<?php
// Retrieve the selected record ID from the $_POST array
$record_id = $_POST['record_id'];

// Use a MySQL SELECT statement to retrieve the record from the database
$query = "SELECT * FROM records WHERE id = $record_id";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

// Populate the form fields with the retrieved record data
echo '<form method="post" action="update_record.php">';
echo '<input type="hidden" name="record_id" value="' . $row['id'] . '">';
echo '<label for="name">Name:</label>';
echo '<input type="text" id="name" name="name" value="' . $row['name'] . '">';
echo '<label for="email">Email:</label>';
echo '<input type="email" id="email" name="email" value="' . $row['email'] . '">';
echo '<input type="submit" value="Save Changes">';
echo '</form>';
?>
Κώδικας PHP για το σενάριο update_record.php:

php

Αντιγραφή κωδικού
<?php
// Retrieve the edited record data from the $_POST array
$record_id = $_POST['record_id'];
$name = $_POST['name'];
$email = $_POST['email'];

// Use a MySQL UPDATE statement to update the record in the database
$query = "UPDATE records SET name = '$name', email = '$email' WHERE id = $record_id";
mysqli_query($connection, $query);

// Redirect the user back to the original form
header('Location: original_form.php');
?>
<!-- Σημειώστε ότι στον παραπάνω κώδικα, υποθέτουμε ότι έχετε ήδη δημιουργήσει μια σύνδεση με τη βάση 
δεδομένων MySQL χρησιμοποιώντας mysqli_connect() ή μια παρόμοια συνάρτηση και ότι έχετε καθαρίσει 
την είσοδο του χρήστη για να αποτρέψετε επιθέσεις SQL injection -->