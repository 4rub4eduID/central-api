<style>
    html { color-scheme: light dark; }
    body { margin: 50px 50px;
    font-family: Consolas; 
    font-size: 18px; }
</style>
<h1>Aruba Central API</h1>
<a href="index.html">Back to Home</a> 
<p>Get AP Details<br>Input AP's SN</p>
<form method="post">
    <input type="text" name="sn" placeholder="Enter SN"><br>
    <input type="submit" value="Submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_sn = $_POST['sn'];
    $input_sn = escapeshellarg($input_sn);
    echo "Details:";
    $output = shell_exec("./get-ap.sh $input_sn");
    echo "<br><pre>$output</pre>";
}
?>

