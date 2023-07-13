<style>
    html { color-scheme: light dark; }
    body { margin: 50px 50px;
    font-family: Consolas; 
    font-size: 18px; }
    .resizedTextbox {font-family: Consolas; 
    font-size: 18px; width: 300px; }
    .resizedButton {font-family: Consolas; 
    font-size: 18px; }
</style>
<h1>Aruba Central API</h1>
<a href="index.html">Back to Home</a> 
<p>Change Existing WLAN<br>Input Group, WLAN, New SSID</p>
<form method="post">
    <input type="text" class="resizedTextbox" name="group" placeholder="Enter Group"><br>
    <input type="text" class="resizedTextbox" name="wlan" placeholder="Enter Existing WLAN"><br>
    <input type="text" class="resizedTextbox" name="ssid" placeholder="Enter New SSID"><br>
    <input type="submit" class="resizedButton" value="Submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_group = $_POST['group'];
    $input_group = escapeshellarg($input_group);
    $input_wlan = $_POST['wlan'];
    $input_wlan = escapeshellarg($input_wlan);
    $input_ssid = $_POST['ssid'];
    $input_ssid = escapeshellarg($input_ssid);
    echo "Details:";
    $output = shell_exec("./change-wlan.sh $input_group $input_wlan $input_ssid");
    echo "<br><pre>$output</pre>";
}
?>

