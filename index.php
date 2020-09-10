<?php

echo "Animal <br>";
echo "<hr>";

class Kucing{
 	public $nama, $jumlah_kaki, $bisa_terbang, $suara;

 }

 $Kucing = new Kucing;
 $Kucing->nama = "Mueza";
 $Kucing->jumlah_kaki = "4";
 $Kucing->bisa_terbang = "tidak";
 $Kucing->suara = "meoong";

 echo "Kucing <br>";
 echo "Nama : $Kucing->nama <br>";
 echo "Jumlah Kaki : $Kucing->jumlah_kaki <br>";
 echo "Bisa Terbang : $Kucing->bisa_terbang <br>";
 echo "Suara : $Kucing->suara <br>";
 echo "<hr>";

class Anjing{
 	public $nama, $jumlah_kaki, $bisa_terbang, $suara;

 }

 $Anjing = new Anjing;
 $Anjing->nama = "Diggie";
 $Anjing->jumlah_kaki = "4";
 $Anjing->bisa_terbang = "tidak";
 $Anjing->suara = "guk guk";

 echo "Anjing <br>";
 echo "Nama : $Anjing->nama <br>";
 echo "Jumlah Kaki : $Anjing->jumlah_kaki <br>";
 echo "Bisa Terbang : $Anjing->bisa_terbang <br>";
 echo "Suara : $Anjing->suara <br>";
 echo "<hr>";

