<?php
$numbers = [
    [87, 10, 87, 57, 36, 14, 19, 17, 5, 86, 46, 73, 88, 17, 62, 35, 81, 97, 15, 22, 86, 41, 56, 25, 33, 53, 88, 53, 61, 32, 32, 66, 22, 54, 25, 65, 17, 73, 23, 54, 78, 65, 14, 7, 37, 73, 96, 31, 24, 53, 20, 4, 28, 73, 35, 83, 36, 46, 3, 76],
    [87, 10, 87, 57, 36, 14, 19, 17, 5, 86, 46, 73, 88, 17, 62, 35, 81, 97, 15, 22, 86, 41, 56, 25, 33, 53, 88, 53, 61, 32, 32, 66, 22, 54, 25, 65, 17, 73, 23, 54, 78, 65, 14, 7, 37, 73, 96, 31, 24, 53, 20, 4, 28, 73, 35, 83, 36, 46, 3, 76]
  ];

$total_array = count($numbers)-1;

for($i = 0; $i < $total_array; $i++) {
    $i = 1;
    // merubah index 0 menjadi nomor baris
    foreach($numbers as $n) {
        $n[0] = 'Baris ke '.$i++;
        print_r($n);
    }
}

?>