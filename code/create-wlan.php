<style>
    html { color-scheme: light dark; }
    body { margin: 50px 50px;
    font-family: Consolas; 
    font-size: 18px; }
</style>
<h1>Aruba Central API</h1>
<a href="index.html">Back to Home</a> 
<p>Create New WLAN<br>Input Group, WLAN, SSID, Passphrase, VLAN and Token</p>
<form method="post">
    <input type="text" name="group" placeholder="Enter Group"><br>
    <input type="text" name="wlan" placeholder="Enter New WLAN"><br>
    <input type="text" name="ssid" placeholder="Enter New SSID"><br>
    <input type="password" name="passphrase" placeholder="Enter Passphrase"><br>
    <input type="text" name="vlan" placeholder="Enter VLAN"><br>
    <input type="password" name="token" placeholder="Enter Token"><br>
    <input type="submit" value="Submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_group = $_POST['group'];
    $input_group = escapeshellarg($input_group);
    $input_wlan = $_POST['wlan'];
    $input_wlan = escapeshellarg($input_wlan);
    $input_ssid = $_POST['ssid'];
    $input_ssid = escapeshellarg($input_ssid);
    $input_passphrase = $_POST['passphrase'];
    $input_passphrase = escapeshellarg($input_passphrase);
    $input_vlan = $_POST['vlan'];
    $input_vlan = escapeshellarg($input_vlan);
    $input_token = $_POST['token'];
    $input_token = escapeshellarg($input_token);
    echo "Details:";
    $output = shell_exec("./create-wlan.sh $input_group $input_wlan $input_ssid $input_passphrase $input_vlan $input_token");
    echo "<br><pre>$output</pre>";
}
?>

