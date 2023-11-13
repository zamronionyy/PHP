<?php
 
 $nilai_tes = 99;

 if ($nilai_tes > 90) {
    $grade = "Anda masuk Kelas Prestasi";
} elseif($nilai_tes > 80){
    $grade = "Anda masuk Kelas A";
} elseif($nilai_tes > 70){
    $grade = "Anda masuk kelas B";
} elseif($nilai_tes > 60){
    $grade = "Anda masuk kelas C";
} elseif($nilai_tes > 50){
    $grade = "Anda masuk kelas D";
} elseif($nilai_tes > 40){
    $grade = "Anda masuk kelas E";
} elseif($nilai_tes > 30){
    $grade = "Anda masuk kelas F";
} elseif($nilai_tes > 20){
    $grade = "Anda masuk kelas G";
} else {
    $grade = "Mohon maaf sepertinya anda tidak mengikuti tes!";
}

echo "Nilai anda: $nilai_tes <br>";
echo "Grade: $grade";

?>