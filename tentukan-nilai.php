
<?php

echo '<h2> Soal Menentukan Katagori Nilai<h2>';

function tentukan_nilai($number)

  //menampilkan grade berdasarkan hasil nilai akhir
{
    if ($number>=85 & $number<100) { 
        $nilai_akhir =  'Sangat baik'; 

    }elseif ($number>=70 & $number<85) {
        $nilai_akhir = 'Baik';

    }elseif ($number>=60 & $number<70) {
        $nilai_akhir = 'Cukup';
    }else {
        $nilai_akhir = 'Kurang';
       
    return $nilai_akhir; 
    }  
//TEST CASES

echo tentukan_nilai(60); //Sangat Baik
//echo tentukan_nilai(76); //Baik
//echo tentukan_nilai(67); //Cukup
//echo tentukan_nilai(43); //Kurang
}
?>