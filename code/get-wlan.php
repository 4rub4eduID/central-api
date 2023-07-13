<style>
    html { color-scheme: light dark; }
    body { margin: 50px 50px;
    font-family: Consolas; 
    font-size: 18px; }
</style>
<h1>Aruba Central API</h1>
<a href="index.html">Back to Home</a> 
<p>Get WLAN Details<br>Input Group</p>
<form method="post">
    <input type="text" name="group" placeholder="Enter Group Name"><br>
    <input type="submit" value="Submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_group = $_POST['group'];
    $input_group = escapeshellarg($input_group);
    echo "Details:";
    $output = shell_exec("./get-wlan.sh $input_group");
    echo "<br><pre>$output</pre>";
}
?>

