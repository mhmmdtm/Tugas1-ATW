 <?php

 echo "Animal <br>";

class Kucing{
 	public $nama, $jumlah_kaki, $bisa_terbang, $suara;

 }

 $Kucing = new Kucing;
 $Kucing->nama = "Mueza";
 $Kucing->jumlah_kaki = "4";
 $Kucing->bisa_terbang = "tidak bisa terbang";
 $Kucing->suara = "meoong";

 echo "Kucing <br>";
 echo "Nama : $Kucing->nama <br>";
 echo "Jumlah Kaki : $Kucing->jumlah_kaki <br>";
 echo "Bisa Terbang : $Kucing->bisa_terbang <br>";
 echo "Suara : $Kucing->suara <br>";
 echo "<hr>";
