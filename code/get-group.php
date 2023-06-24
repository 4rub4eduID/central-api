<style>
    html { color-scheme: light dark; }
    body { margin: 50px 50px;
    font-family: Consolas; }
</style>
<h1>Aruba Central API</h1>
<a href="index.html">Back to Home</a> 
<p>Get Group Details<br>Input Token</p>
<form method="post">
    <input type="password" name="token" placeholder="Enter Token">
    <input type="submit" value="Submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_token = $_POST['token'];
    $input_token = escapeshellarg($input_token);
    echo "Details:";
    $output = shell_exec("./get-group.sh $input_token");
    echo "<br><pre>$output</pre>";
}
?>

