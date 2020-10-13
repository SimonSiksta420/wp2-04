<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$computer = array(
  'GPU' => "RTX 2070",
  'CPU' => "Intel Core i7 9700K",
  'RAM' => "16 GB 3200MHZ",
  'SSD' => "SSD Samsung EVO 860 M.2 250GB",
  'Motherboard' => "Asus Rog"
  'Fan' => "Noctua fan"
  'Keyboard' => "HyperX Alloy Elite RGB" 
  'Mouse' => "Razer naga trinity"
  'Headphones' => "Dunno"

);

?>

<h1> Computer </h1>

<ul>

 <li> Grafická karta <?= $computer['GPU'] ?> </li>
 <li> Procesor <?= $computer['CPU'] ?> </li>
 <li> RAM <?= $computer['RAM'] ?> </li>
 <li> SSD <?= $computer['SSD'] ?> </li>
 <li> Motherboard <?= $computer['Motherboard'] ?> </li>
 <li> Fan <?= $computer['Fan'] ?> </li>
 <li> Keyboard <?= $computer['Keyboard'] ?> </li>
 <li> Mouse <?= $computer['Mouse'] ?> </li>
 <li> Headphones <?= $computer['Headphones'] ?> </li>

</ul>

</body>
</html>