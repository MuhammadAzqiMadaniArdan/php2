<?php
$array=[5,1,20,22,6,4,5,10,50,11,95];

$array1 = array_unique($array);


$arrayString = implode(',',$array1);
echo "array : ".implode(',',$array1). "<br>";

foreach($array as $arr){
    if($arr % 5 == 0){
        echo $arr.",";
    }
}

// for($i = 0;$i < 10;$i++){
//     if($array % 5 == 0){
//         echo $arr.",";
//     }
// }
sort($array);

echo "<br>".implode(',',$array);

?>