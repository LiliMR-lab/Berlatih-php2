<?php
function tentukan_nilai($number)
{
    //menampilkan grade berdasarkan hasil nilai akhir

if ($number>=90)
{
$grade = “Sangat baik”;
}
elseif ($number>=75)
{
$grade = “Baik”;
}
elseif ($number>=60)
{
$grade = “Cukup”;
}
else
{
$grade = “Kurang”;
}

//TEST CASES
echo tentukan_nilai(98);//Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>
