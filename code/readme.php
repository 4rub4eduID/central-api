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
<p>README<br>Input API URL and Token</p>
<form method="post">
    <input type="text" class="resizedTextbox" name="api_url" placeholder="Enter API URL"><br>
    <input type="text" class="resizedTextbox" name="token" placeholder="Enter Token"><br>
    <input type="submit" class="resizedButton" value="Submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $api_url = $_POST['api_url'];
    $api_url = escapeshellarg($api_url);
    $token = $_POST['token'];
    $token = escapeshellarg($token);
    $myfile = fopen("./.env", "w") or die("Unable to open file!");
    $api_url_txt = "api_url=$api_url";
    fwrite($myfile, $api_url_txt);
    $token_txt = "\ntoken=$token";
    fwrite($myfile, $token_txt);
    fclose($myfile);
    echo file_get_contents("./.env");
}
?>