<?php
error_reporting(-1);

require_once "func.php";

$arra = [1,656,69,6,56];
$arrb = [6,56,100];
$arrc = ["a"=>10,"b"=>20,"c"=>30];

echo "<pre>";

echo count($arra)."\n";
echo my_count($arra)."\n";

print_r(array_diff($arra,$arrb));
print_r(my_array_diff($arra,$arrb));

print_r(array_intersect($arra,$arrb));
print_r(my_array_intersect($arra,$arrb));

var_dump(array_key_exists("a",$arrc));
var_dump(my_array_key_exists("a",$arrc));

print_r(array_keys($arra));
print_r(my_array_keys($arra));

print_r(array_values($arra));
print_r(my_array_values($arra));

print_r(array_merge($arra,$arrb));
print_r(my_array_merge($arra,$arrb));

print_r(array_rand($arra));
print_r(my_array_rand($arra));

print_r(array_reverse($arra));
print_r(my_array_reverse($arra));

$name="Ali";
$age=20;
print_r(compact("name","age"));

extract($arrc);

$sortArr=$arra;
sort($sortArr);
print_r($sortArr);

$sortArr=$arra;
rsort($sortArr);
print_r($sortArr);

$sortArr=$arrc;
asort($sortArr);
print_r($sortArr);

$sortArr=$arrc;
arsort($sortArr);
print_r($sortArr);

$keys=["name","age"];
$values=["Ali",20];
print_r(array_combine($keys,$values));
print_r(my_array_combine($keys,$values));

echo array_search(69,$arra)."\n";
echo my_array_search(69,$arra)."\n";

print_r(array_shift($arra));
print_r(my_array_shift($arra));

print_r(array_unique([1,1,2,2,3]));
print_r(my_array_unique([1,1,2,2,3]));

print_r(array_unshift($arra,999));
print_r(my_array_unshift($arra,888));

print_r(array_flip($arrc));
print_r(my_array_flip($arrc));

print_r(array_pop($arra));
print_r(my_array_pop($arra));

array_push($arra,200);
print_r($arra);
print_r(my_array_push($arra,300));

var_dump(in_array(69,$arra));
var_dump(my_in_array(69,$arra));

list($a,$b,$c) = $arra;
echo $a." ".$b." ".$c;

?>