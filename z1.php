<?php
  $file = fopen("proizvodi.txt", "w");

  fwrite($file,"ASUS GeForce RTX 5080 - 2900 KM\n");
  fwrite($file,"AMD Ryzen 7 7800x3D - 624 KM\n");
  fwrite($file,"Corsair Vengence DDR5 Ram 32GB - 800 KM\n");
  fwrite($file,"Gigabyte B850 AM5 Motherboard - 353 KM\n");

  fclose($file);

  $file = fopen("proizvodi.txt", "r");

  while(!feof($file)) {
    echo fgets($file) . "<br>";
  }

  fclose($file);

?>