<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jawaban Tugas PHP dasar</title>
</head>
<body>
    <?php
    /* 
    SOAL 
    Cetaklah angka baris demi baris dari 1 hingga 100.
    Untuk angka kelipatan 3 memanggil function luas lingkaran dengan jari-jari dari angka tersebut dibagi 3 dan mencetak hasil luasnya.
    Untuk kelipatan 5 memanggil function keliling lingkaran dengan jari-jari dari angka tersebut dibagi 5 dan mencetak hasil kelilingnya, apabila angka tersebut kelipatan 3 dan 5 maka memanggil function luas persegi dengan panjang angka tersebut dibagi 3 dan lebar angka tersebut dibagi 5. 
    Semua angka menggunakan 2 angka dibelakang koma. Note: nilai pi = 3.14
    */
    for($i = 1; $i <= 100; $i++){
       if(($i % 3 ==0 ) && ($i % 5 ==0)){
        echo sprintf("%.2f",luasPersegi($i)) . '<br>';
       }else if($i % 5 == 0){
        echo sprintf("%.2f", kelilingLingkaran($i)) . '<br>';
       }else if($i % 3 == 0){
        echo sprintf("%.2f",luasLingkaran($i)) . '<br>';  
       }else{
        echo sprintf("%.2f",$i). '<br>';
       }
    }
    function luasLingkaran($angka){
        $jari2 = $angka / 3;
        $luas = 3.14 * pow($jari2,2) ;
        return $luas;
    }
    function kelilingLingkaran($angka){
        $jari2 = $angka / 5;
        $keliling = 2 * 3.14 * $jari2;
        return $keliling;
    }
    function luasPersegi($angka){
        $panjang = $angka / 3;
        $lebar = $angka / 5;
        $luas = $panjang * $lebar;
        return $luas;
    }
    ?>
</body>
</html>