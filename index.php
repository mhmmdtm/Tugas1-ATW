 <?php

 include "Animal.php";

 $mueza = new Kucing;
 $mueza->jumlah_kaki = 4;
 echo "Mueza adalah kucing <br>";
 echo $mueza->jumlah_kaki."<br>";
 echo $mueza->bisa_terbang."<br>";
 $mueza->bersuara()."<br>";

 echo "<hr>";

 $diggie = new Anjing;
 $diggie->jumlah_kaki = 4;
 echo "Diggie adalah kucing <br>";
 echo $diggie->jumlah_kaki."<br>";
 echo $diggie->bisa_terbang."<br>";
 $diggie->bersuara()."<br>";

 echo "<hr>";

 $jhon = new Elang;
 $jhon->jumlah_kaki = 2;
 echo "Jhon adalah kucing <br>";
 echo $jhon->jumlah_kaki."<br>";
 echo $Jhon->bisa_terbang."<br>";
 $jhon->bersuara()."<br>";

 echo "<hr>";

 $buggie = new Kelinci;
 $buggie->jumlah_kaki = 4;
 echo "Buggie adalah kucing <br>";
 echo $buggie->jumlah_kaki."<br>";
 echo $buggie->bisa_terbang."<br>";
 $buggie->bersuara()."<br>";