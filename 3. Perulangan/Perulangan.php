<?php

echo "<h3> Perulangan for </h3>" ;
echo "-----------------------------------------------------" ;
echo "<br>";


for ($i =0; $i < 10; $i++){
    echo "<p> Perulangan for ke-$i</p>";
}


echo "<h3> Perulangan while </h3>" ;
echo "-----------------------------------------------------" ;
echo "<br>";

$ulangi = 0;

while ($ulangi < 10){
    echo "<p> perulangan while ke-$ulangi </p>";
    $ulangi++;
}


echo "<h3> Perulangan do/while </h3>" ;
echo "-----------------------------------------------------" ;
echo "<br>";

$ulangido = 10;

do {
    echo "<p> Perulangan dari menurun mualai dari $ulangido </p>";
    $ulangido--;
}while ($ulangido > 0);


echo "<h3> Perulangan foreach </h3>" ;
echo "-----------------------------------------------------" ;
echo "<br>";

$books = [
    "Panduan belajar php pemula",
    "Membangun aplikasi dengan php",
    "Tutorial Php dan Mysql",
    "Membuar chat bot dengan php"

];

echo "<h5> Jago Php </p>";
echo "<ul>";
foreach ($books as $buku){
    echo "<li>$buku</li>";
} 
echo "</ul>";


echo "<h3> Perulangan bersarang </h3>" ;
echo "-----------------------------------------------------" ;
echo "<br>";
//perulangan bersarang 1
for($i = 0; $i < 5; $i++){
    for ($j = 0; $j < 10; $j++){
    echo "Ini perulangan ke ($i, $j) <br>";
    }
}

echo "<br>";
echo "<p> Contoh 2 </p>";
echo "<br>";
echo "<br>";

//perulangan bersarang 2
$i = 0;
while($i < 10){
    for($j = 0; $j <10; $j++){
        echo "ini perulangan ke ($i, $j)<br>";
    }
    $i++;
}




?>