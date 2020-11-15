<?php

$nama = array("Lanirne" , "Aduh" , "Qifuat" , "Toda" , "Anevi" , "Samid" , "Kifuat");


sort($nama);

echo "Hasil Urutan dengan Menggunakan Sorting";
echo "<br/>";

$jumlah = count($nama);
for ($x=0; $x<$jumlah; $x++){
    echo $nama[$x];
    echo "<br/>";
}
?>