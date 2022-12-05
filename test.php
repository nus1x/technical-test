<?php

$str1 = "a2b2ck3ml";
$str2 = "a4b2sd2f2h2ck3ml";

$split1 = str_split($str1);
$count1 = count($split1);

$split2 = str_split($str2);
$count2 = count($split2);

// total karakter yang sama dari $str1
echo "String: ".$str1."\n";
for($i = 0; $i<$count1; $i++) {
    $match = substr_count($str1, $split1[$i]);
    print("Terdapat ".$match." karakter ".$split1[$i]." sama pada string: ".$str1."\n");
}


// total karakter yang sama dari $str2
echo "\nString: ".$str2."\n";
for($i = 0; $i<$count1; $i++) {
    $match = substr_count($str2, $split2[$i]);
    print("Terdapat ".$match." karakter ".$split2[$i]." sama pada string: ".$str2."\n");
}
?>