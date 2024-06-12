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
<p>Refresh Token<br></p>
<form method="post">
    <input type="submit" class="resizedButton" name="refresh_token" value="Refresh Token">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $output = shell_exec("./refresh-token.sh");
    echo "<br><pre>$output</pre>";
    $data = json_decode($output, true);
    $refresh_token = $data["refresh_token"];
    $token = $data["access_token"];
    $myfile = fopen("./.env", "w+") or die("Unable to open file!");
    $refresh_token_txt = "refresh_token=$refresh_token";
    fwrite($myfile, $refresh_token_txt);
    $token_txt = "\ntoken=$token";
    fwrite($myfile, $token_txt);
    fclose($myfile);
    echo "done";
}
?>