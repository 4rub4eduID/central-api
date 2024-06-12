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
<p>README<br>Input API URL and Token</p>
<form method="post">
    <input type="text" class="resizedTextbox" name="api_url" placeholder="Enter API URL"><br>
    <input type="text" class="resizedTextbox" name="client_id" placeholder="Enter Client ID"><br>
    <input type="text" class="resizedTextbox" name="client_secret" placeholder="Enter Client Secret"><br>
    <input type="text" class="resizedTextbox" name="refresh_token" placeholder="Enter Refresh Token"><br>
    <input type="text" class="resizedTextbox" name="token" placeholder="Enter Token"><br>
    <input type="submit" class="resizedButton" name="submit" value="Submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $api_url = $_POST['api_url'];
    $api_url = escapeshellarg($api_url);
    $client_id = $_POST['client_id'];
    $client_id = escapeshellarg($client_id);
    $client_secret = $_POST['client_secret'];
    $client_secret = escapeshellarg($client_secret);
    $refresh_token = $_POST['refresh_token'];
    $refresh_token = escapeshellarg($refresh_token);
    $token = $_POST['token'];
    $token = escapeshellarg($token);
    $myfile = fopen("./.auth", "w") or die("Unable to open file!");
    $api_url_txt = "api_url=$api_url";
    fwrite($myfile, $api_url_txt);
    $client_id_txt = "\nclient_id=$client_id";
    fwrite($myfile, $client_id_txt);
    $client_secret_txt = "\nclient_secret=$client_secret";
    fwrite($myfile, $client_secret_txt);
    fclose($myfile);
    $myfile = fopen("./.env", "w") or die("Unable to open file!");
    $refresh_token_txt = "refresh_token=$refresh_token";
    fwrite($myfile, $refresh_token_txt);
    $token_txt = "\ntoken=$token";
    fwrite($myfile, $token_txt);
    fclose($myfile);
    echo "done";
}
?>