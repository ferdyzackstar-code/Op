<?php

///// OPERATOR ARITMATIKA PHP /////
echo "<h1>OPERATOR ARITMATIKA PHP</h1>";

// no 1
echo "1. Buat sebuah program PHP untuk menghitung hasil penjumlahan dari dua bilangan, yaitu 12 dan 8!<br><br>";

$x = 12;
$y = 8;
$z = $x + $y;

echo "$x + $y = $z";
echo "<hr>";

// no 2
echo "2. Buat sebuah program PHP untuk menghitung hasil pengurangan dari bilangan 30 dikurangi 14!<br><br>";

$x = 30;
$y = 14;
$z = $x - $y;

echo "$x - $y = $z";
echo "<hr>";

// no 3
echo "3. Buat sebuah program PHP untuk menghitung hasil perkalian dari bilangan 7 dan 6!<br><br>";

$x = 7;
$y = 6;
$z = $x * $y;

echo "$x x $y = $z";
echo "<hr>";

// no 4
echo "4. Buat sebuah program PHP untuk menghitung hasil pembagian dari bilangan 48 dibagi 6!<br><br>";

$x = 48;
$y = 6;
$z = $x / $y;

echo "$x / $y = $z";
echo "<hr>";

// no 5
echo "5. Buat sebuah program PHP untuk menentukan sisa hasil bagi dari bilangan 19 dibagi 4!<br><br>";

$x = 19;
$y = 4;
$z = $x % $y;

echo "$x % $y = $z";
echo "<hr>";

// no 6
echo "6. Diketahui tiga buah variabel:<br><br>";
echo "a bernilai 10<br>";
echo "b bernilai 5<br>";
echo "c bernilai 2<br><br>";
echo "Buat program PHP untuk menghitung hasil dari operasi:<br>";
echo "a + b x c !<br><br>";

$a = 10;
$b = 5;
$c = 2;
$hasil = $a + $b * $c;

echo "$a + $b x $c = $hasil";
echo "<hr>";

// no 7

echo "7. Buat sebuah program PHP untuk menghitung nilai rata-rata dari tiga bilangan, yaitu 8, 12, dan 16!<br><br>";

/*

$a = 8;
$b = 12;
$c = 16;
$diTambah = $a + $b + $c;
$hasilAkhir = $diTambah / 3;

echo "$a + $b + $c = $diTambah<br>";
echo "$diTambah / 3 = $hasilAkhir";
echo "<hr>";

*/

$data = [8, 12, 16];;
$jumlahIsi = $data[0] + $data[1] + $data[2];
$jumlahData = count($data);
$hasilAkhir = $jumlahIsi / $jumlahData;

echo "$data[0] + $data[1] + $data[2] = $jumlahIsi<br>";
echo "$jumlahIsi / $jumlahData = $hasilAkhir";

echo "<hr>";

// no 8

echo "8. Buat sebuah program PHP untuk menentukan apakah bilangan 20 termasuk bilangan genap atau ganjil menggunakan operator aritmatika!<br><br>";

$a = 20;

if($a % 2 == 0){
    echo "$a adalah bilangan genap";
} else {
    echo "$a adalah bilangan ganjil";
}
?>