<form method="post">
    <input type="text" name="myName" placeholder="Enter SN!">
    <input type="submit" value="Submit">
</form>

<?php
// When the server gets a $_POST request
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Set the variable name to whatever the user put in
    $input_SN = $_POST['myName']; // equal to the name="" attribute in the form
    $input_SN = escapeshellarg($input_SN);
    echo "Details for, " . $input_SN;
    $output = shell_exec("./get-ap.sh $input_SN");
    echo $output;
}
?>

