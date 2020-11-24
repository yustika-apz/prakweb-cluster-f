<!DOCTYPE html>
<html>
    <head>
    <style>
        p {
	        color: rgb(0,0,255)
    }
     h4 {
        color: red;
    }
    </style>
    </head>
<body>
    <?php 
    $nama = "Yustika Ayu Putri Zalukhu";
    $panjang_nama;
    $harga;

    echo "Nama $nama <br>";
    $panjang_nama = strlen($nama);
    echo "Jumlah karakter $nama adalah $panjang_nama";

    if ($panjang_nama>=1 && $panjang_nama<=10)
    {
        $harga = $panjang_nama*300;
        echo "<p>Total Harga : $harga </p>";
    }
    else if ($panjang_nama>=11 && $panjang_nama<=20)
    {
        $harga = $panjang_nama*500;
        echo "<p>Total Harga : $harga </p>";
    }
    else if ($panjang_nama>20)
    {
        $harga = $panjang_nama*700;
        echo "<p>Total Harga : $harga </p>";
    }
    else {
        echo "<h4>Tidak ada nama</h4>";
    }
    ?>
</body>
</html>