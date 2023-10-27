<?php

$nama = 'Alex' ;
$nilaimahasiswa = 90;

switch($nilaimahasiswa)
{
   case ($nilaimahasiswa >= 90) :
      $grade = "A";
      break;
   case ($nilaimahasiswa  < 90):
      $grade = "B";
      break;
   case ($nilaimahasiswa  < 80):
      $grade = "C";
      break;
   case ($nilaimahasiswa  < 70):
      $grade = "D";
      break;
   case ($nilaimahasiswa  < 60):
      $grade = "E";
      break;
}

echo "Hasil Studi Mahasiswa : $nama<br>";
echo "Nilai Studi = $nilaimahasiswa <br>";
echo "Nilai Grade = $grade <br>";
echo "<hr>";

$nama = 'Doni' ;
$nilaimahasiswa = 89;

switch($nilaimahasiswa)
{
   case ($nilaimahasiswa >= 90) :
      $grade = "A";
      break;
   case ($nilaimahasiswa  < 90):
      $grade = "B";
      break;
   case ($nilaimahasiswa  < 80):
      $grade = "C";
      break;
   case ($nilaimahasiswa  < 70):
      $grade = "D";
      break;
   case ($nilaimahasiswa  < 60):
      $grade = "E";
      break;
}

echo "Hasil Studi Mahasiswa : $nama<br>";
echo "Nilai Studi = $nilaimahasiswa <br>";
echo "Nilai Grade = $grade <br>";
echo "<hr>";

$nama = 'Benny' ;
$nilaimahasiswa = 79;

switch($nilaimahasiswa)
{
   case ($nilaimahasiswa >= 90 && $nilaimahasiswa <=100) :
      $grade = "A";
      break;
   case ($nilaimahasiswa  < 90 && $nilaimahasiswa >= 80):
      $grade = "B";
      break;
   case ($nilaimahasiswa  < 80 && $nilaimahasiswa >= 70):
      $grade = "C";
      break;
   case ($nilaimahasiswa  < 70 && $nilaimahasiswa >= 60):
      $grade = "D";
      break;
   case ($nilaimahasiswa  < 60):
      $grade = "E";
      break;
}

echo "Hasil Studi Mahasiswa : $nama<br>";
echo "Nilai Studi = $nilaimahasiswa <br>";
echo "Nilai Grade = $grade <br>";
echo "<hr>";

$nama = 'Zaki' ;
$nilaimahasiswa = 69;

switch($nilaimahasiswa)
{
   case ($nilaimahasiswa >= 90 && $nilaimahasiswa <=100) :
      $grade = "A";
      break;
   case ($nilaimahasiswa  < 90 && $nilaimahasiswa >= 80):
      $grade = "B";
      break;
   case ($nilaimahasiswa  < 80 && $nilaimahasiswa >= 70):
      $grade = "C";
      break;
   case ($nilaimahasiswa  < 70 && $nilaimahasiswa >= 60):
      $grade = "D";
      break;
   case ($nilaimahasiswa  < 60):
      $grade = "E";
      break;
}

echo "Hasil Studi Mahasiswa : $nama<br>";
echo "Nilai Studi = $nilaimahasiswa <br>";
echo "Nilai Grade = $grade <br>";
echo "<hr>";

$nama = 'Diki' ;
$nilaimahasiswa = 59;

switch($nilaimahasiswa)
{
   case ($nilaimahasiswa >= 90 && $nilaimahasiswa <=100) :
      $grade = "A";
      break;
   case ($nilaimahasiswa  < 90 && $nilaimahasiswa >= 80):
      $grade = "B";
      break;
   case ($nilaimahasiswa  < 80 && $nilaimahasiswa >= 70):
      $grade = "C";
      break;
   case ($nilaimahasiswa  < 70 && $nilaimahasiswa >= 60):
      $grade = "D";
      break;
   case ($nilaimahasiswa  < 60):
      $grade = "E";
      break;
}

echo "Hasil Studi Mahasiswa : $nama<br>";
echo "Nilai Studi = $nilaimahasiswa <br>";
echo "Nilai Grade = $grade <br>";
echo "<hr>";

?>