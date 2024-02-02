<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$X = array (10, 20, 30, 40, 50,60);
echo count($X)."<br>";
var_dump($X); 

echo "<br>";
$X = array (10, 20, 30, 40, 50,60);
unset($X[2]); 
$X = array_values ($X);
echo count($X)."<br>";
var_dump($X); 
?>
</body>
</html>