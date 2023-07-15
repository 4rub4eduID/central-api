<style>
    html {
        color-scheme: light dark;
    }

    body {
        margin: 50px 50px;
        font-family: Consolas;
        font-size: 18px;
    }

    .resizedTextbox {
        font-family: Consolas;
        font-size: 18px;
        width: 300px;
    }

    .resizedButton {
        font-family: Consolas;
        font-size: 18px;
    }
</style>
<h1>Aruba Central API</h1>
<a href="index.html">Back to Home</a>
<p>Create New WLAN<br>Input Group, WLAN, SSID, Passphrase, VLAN</p>
<form method="post">
    <input type="text" class="resizedTextbox" name="group" placeholder="Enter Group"><br>
    <input type="text" class="resizedTextbox" name="wlan" placeholder="Enter New WLAN"><br>
    <input type="text" class="resizedTextbox" name="ssid" placeholder="Enter New SSID"><br>
    <input type="password" class="resizedTextbox" name="passphrase" placeholder="Enter Passphrase"><br>
    <input type="text" class="resizedTextbox" name="vlan" placeholder="Enter VLAN"><br>
    <input type="submit" class="resizedButton" value="Submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
    echo "Details:";
    $output = shell_exec("./create-wlan.sh $input_group $input_wlan $input_ssid $input_passphrase $input_vlan");
    echo "<br><pre>$output</pre>";
}
?>