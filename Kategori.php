<?php
    $nama ='Alex' ;
    $tb ='160'/100 ;
    $bb ='55' ;
    $bmi = $bb/ ($tb**2);
    echo "<h3>Hasil perhitungan BMI</h3>"; 
    echo "Nama Anda: $nama<br>";
    echo "Tinggi Badan: $tb meter<br>";
    echo "Berat Badan: $bb kilogram<br>"; 
    echo "BMI Anda: ".number_format($bmi); 
    if( $bmi < 20 ){ //kondisi 1
        echo "<br>Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk kurus <br> <hr>";      //output 1
    }elseif( $bmi < 29){     //kondisi 2
        echo "<br>Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk Sedang <br> <hr>";      //output 2
    }else{                  //kondisi 3
        echo "<br>Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk Gemuk <br> <hr>";         //output 3
    }
    $nama ='Bobby' ;
    $tb ='175'/100 ;
    $bb ='90' ;
    $bmi = $bb/ ($tb**2);
    echo "<h3>Hasil perhitungan BMI</h3>"; 
    echo "Nama Anda: $nama<br>";
    echo "Tinggi Badan: $tb meter<br>";
    echo "Berat Badan: $bb kilogram<br>"; 
    echo "BMI Anda: ".number_format($bmi); 
    if( $bmi < 20 ){ //kondisi 1
        echo "<br>Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk kurus <br> <hr>";      //output 1
    }elseif( $bmi < 29){     //kondisi 2
        echo "<br>Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk Sedang <br> <hr>";      //output 2
    }else{                  //kondisi 3
        echo "<br>Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk Gemuk <br> <hr>";         //output 3
    }
    $nama ='Putri' ;
    $tb ='155'/100 ;
    $bb ='38' ;
    $bmi = $bb/ ($tb**2);
    echo "<h3>Hasil perhitungan BMI</h3>"; 
    echo "Nama Anda: $nama<br>";
    echo "Tinggi Badan: $tb meter<br>";
    echo "Berat Badan: $bb kilogram<br>"; 
    echo "BMI Anda: ".number_format($bmi); 
    if( $bmi < 20 ){ //kondisi 1
        echo "<br>Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk kurus <br> <hr>";      //output 1
    }elseif( $bmi < 29){     //kondisi 2
        echo "<br>Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk Sedang <br> <hr>";      //output 2
    }else{                  //kondisi 3
        echo "<br>Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk Gemuk <br> <hr>";         //output 3
    }
?>