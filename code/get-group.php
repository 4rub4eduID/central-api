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
<p>Get Group Details</p>
<form method="post">
    <input type="submit" class="resizedButton" value="Submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Details:";
    $output = shell_exec("./get-group.sh");
    echo "<br><pre>$output</pre>";
}
?>

