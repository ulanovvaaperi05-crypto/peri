<?php
echo "<h3>1.array()-Создаёт массив</h3>";
$arr = array('Aiperi', 'Bermet', 'Zarina');
print_r($arr);

echo "<h3>2.array_change_key_case()-Делает ключи маленькими</h3>";
$arr = ["NAME" => "Aiperi"];
print_r(array_change_key_case($arr, CASE_LOWER));

echo "<h3>3.array_chunk()-Делит массив на части по 2 элемента</h3>";
$arr = [1,2,3,4];
print_r(array_chunk($arr, 2));

echo "<h3>4.array_column()-Берёт только столбец</h3>";
$arr = [
    ["name"=>"Aiperi"],
    ["name"=>"Aijamal"]
];
print_r(array_column($arr, "name"));

echo "<h3>5.array_combine()-Создаёт новый массив с ключами из значений одного массива и значениями из значений другого</h3>";
$keys = ["a","b"];
$values = [1,2];
print_r(array_combine($keys,$values));

echo "<h3>6. array_count_values()-Считает сколько раз встречается значение</h3>";
$arr = ["IST","PIN","IST","IST","ITU","ITU"];
print_r(array_count_values($arr));

echo "<h3>7. array_diff()-Убирает элементы из второго массива → 1,3</h3>";
$a = [1,2,3];
$b = [2];
print_r(array_diff($a,$b));

echo "<h3>8. array_diff_assoc()-Сравнивает и значения, и ключи</h3>";
$a = ["a"=>1,"b"=>2];
$b = ["a"=>1];
print_r(array_diff_assoc($a,$b));

echo "<h3>9. array_diff_key()-Сравнивает только ключи</h3>";
$a = ["a"=>4,"b"=>5];
$b = ["a"=>6];
print_r(array_diff_key($a,$b));

echo "<h3>10.array_fill()</h3>";
print_r(array_fill(0,3,"Aiposh"));

echo "<h3>11. array_fill_keys()-Заполняет ключи значением</h3>";
$keys = ["a","b"];
print_r(array_fill_keys($keys,"ist(b)2-24"));

echo "<h3>12. array_filter()-Оставляет элементы >2</h3>";
$arr = [1,2,3,4];
print_r(array_filter($arr, function($x) {
    return $x > 2;
}));

echo "<h3>13.array_first — получает первое значение массива</h3>";
$arr = [22,20,30];
$result = reset($arr);
var_dump($result);

echo "<h3>14.array_flip — меняет ключи и значения</h3>";
$arr = ["Aiperi"=>1, "Elenora"=>2];
$result = array_flip($arr);
print_r($result);

echo "<h3>15.array_intersect — пересечение массивов</h3>";
$a = [1,2,3]; 
$b = [2,3,4];
$result = array_intersect($a,$b);
print_r($result);

echo "<h3>16.array_intersect_assoc — пересечение с проверкой ключа</h3>";
$a = ["a"=>5,"b"=>2]; 
$b = ["a"=>5,"b"=>3];
$result = array_intersect_assoc($a,$b);
print_r($result);

echo "<h3>17.array_intersect_key — пересечение по ключам</h3>";
$a = ["a"=>1,"b"=>2]; 
$b = ["b"=>5,"c"=>6];
$result = array_intersect_key($a,$b);
print_r($result);

echo "<h3>18.array_intersect_uassoc — пересечение с callback для ключа</h3>";
$a = ["a"=>1,"b"=>2];
$b = ["a"=>1,"B"=>2];
$result = array_intersect_uassoc($a,$b,function($k1,$k2){return strcasecmp($k1,$k2);});
print_r($result);

echo "<h3>19.array_intersect_ukey — пересечение с callback по ключам</h3>";
$a = ["x"=>1,"y"=>2]; 
$b = ["X"=>3,"y"=>4];
$result = array_intersect_ukey($a,$b,function($k1,$k2){return strcasecmp($k1,$k2);});
print_r($result);

echo "<h3>20.array_key_exists — проверяет, есть ли ключ</h3>";
$arr = ["a"=>1,"b"=>2];
var_dump(array_key_exists("a",$arr));
var_dump(array_key_exists("c",$arr));

echo "<h3>21.array_last — получает последнее значение массива</h3>";
function array_last($arr){ 
    return end($arr); 
}
$arr = [5,6,7];
var_dump(array_last($arr));

echo "<h3>22.array_merge — сливает массивы</h3>";
$a = [1,2]; $b=[3,4];
$result = array_merge($a,$b);
print_r($result);

echo "<h3>23.array_multisort — сортировка нескольких массивов</h3>";
$a = [3,1,2]; $b=["c","a","b"];
array_multisort($a,$b);
print_r($a);
print_r($b);

echo "<h3>24. array_pad — дополняет массив до длины</h3>";
$arr = [1,2];
print_r(array_pad($arr,5,0)); 

echo "<h3>25. array_pop — удаляет последний элемент</h3>";
$arr = [1,2,3];
array_pop($arr);
print_r($arr);

echo "<h3>26. array_product — произведение элементов</h3>";
echo array_product([2,3,4]); 

echo "<h3>27. array_push — добавляет в конец</h3>";
$arr = [1,2];
array_push($arr,3,4);
print_r($arr);

echo "<h3>28. array_rand — случайный ключ</h3>";
$arr = ["a"=>10,"b"=>20];
print_r(array_rand($arr));

echo "<h3>29. array_replace — заменяет значения</h3>";
$a = ["a"=>1,"b"=>2];
$b = ["b"=>5];
print_r(array_replace($a,$b));

echo "<h3>30. array_replace_recursive — рекурсивная замена</h3>";
$a = ["a"=>["x"=>1]];
$b = ["a"=>["x"=>5]];
print_r(array_replace_recursive($a,$b));

echo "<h3>31. array_reverse — переворачивает массив</h3>";
print_r(array_reverse([1,2,3]));

echo "<h3>32. array_search — ищет значение</h3>";
echo array_search(2,[1,2,3]);

echo "<h3>33. array_shift — удаляет первый элемент</h3>";
$arr = [1,2,3];
array_shift($arr);
print_r($arr);

echo "<h3>34. array_slice — часть массива</h3>";
print_r(array_slice([1,2,3,4],1,2));

echo "<h3>35. array_splice — вырезает и заменяет</h3>";
$arr = [1,2,3,4];
array_splice($arr,1,2,[9,9]);
print_r($arr);

echo "<h3>36. array_sum — сумма</h3>";
echo array_sum([1,2,3]);

echo "<h3>37. array_unique — убирает повторы</h3>";
print_r(array_unique([1,2,2,3]));

echo "<h3>38. array_unshift — добавляет в начало</h3>";
$arr = [2,3];
array_unshift($arr,1);
print_r($arr);

echo "<h3>39. array_values — возвращает значения</h3>";
print_r(array_values(["a"=>1,"b"=>2]));

echo "<h3>40. array_walk — применяет функцию</h3>";
$arr=[1,2,3];
array_walk($arr,function(&$v){$v*=2;});
print_r($arr);

echo "<h3>41. array_walk_recursive — рекурсивно</h3>";
$arr=["a"=>[1,2]];
array_walk_recursive($arr,function(&$v){$v+=1;});
print_r($arr);

echo "<h3>42. arsort — сортировка по убыванию</h3>";
$arr=["a"=>3,"b"=>1];
arsort($arr);
print_r($arr);

echo "<h3>43. asort — сортировка по возрастанию</h3>";
$arr=["a"=>3,"b"=>1];
asort($arr);
print_r($arr);

echo "<h3>44. compact — создаёт массив из переменных</h3>";
$a = 1; $b = 2; $c = 3;
$arr = compact("a","b","c");
print_r($arr);

echo "<h3>45. count — количество элементов</h3>";
$arr = [1,2,3,4];
echo count($arr) ;

echo "<h3>46. current — текущий элемент массива</h3>";
$arr = [50,20,30];
echo current($arr) ;

echo "<h3>48. end — последний элемент</h3>";
$arr = [1,2,3];
echo end($arr) ;

echo "<h3>49. extract — превращает элементы массива в переменные</h3>";
$arr = ["x"=>100,"y"=>200];
extract($arr);
echo "x=$x, y=$y";

echo "<h3>50. in_array — проверка наличия значения</h3>";
$arr = [1,2,3];
var_dump(in_array(2,$arr));
var_dump(in_array(5,$arr));

echo "<h3>51. key — ключ текущего элемента</h3>";
$arr = ["a"=>20];
echo key($arr); 

echo "<h3>52. key_exists — псевдоним array_key_exists</h3>";
$arr = ["a"=>1,"b"=>2];
var_dump(key_exists("b",$arr));
var_dump(key_exists("c",$arr));

echo "<h3>53. krsort — сортировка по ключу в убывающем порядке</h3>";
$arr = ["a"=>2,"b"=>1,"c"=>3];
krsort($arr);
print_r($arr);

echo "<h3>54. ksort — сортировка по ключу в возрастающем порядке</h3>";
$arr = ["a"=>2,"b"=>1,"c"=>3];
ksort($arr);
print_r($arr);

echo "<h3>55. list — присваивает значения массива переменным</h3>";
$arr = [1,2,3];
list($x,$y,$z) = $arr;
echo "$x, $y, $z";

echo "<h3>56. natcasesort — естественная сортировка без учёта регистра</h3>";
$arr = ["ist12","Aiperi1","ULANOVA3"];
natcasesort($arr);
print_r($arr);

echo "<h3>57. natsort — естественная сортировка с учётом регистра</h3>";
$arr = ["img12","img1","IMG3"];
natsort($arr);
print_r($arr);

echo "<h3>58. next — сдвигает указатель вперёд</h3>";
$arr = [1,2,3];
next($arr);
echo current($arr) ;

echo "<h3>59. pos — псевдоним current</h3>";
$arr = [5,6,7];
echo pos($arr); 

echo "<h3>60.prev — сдвигает указатель назад</h3>";
$arr = [1,2,3];
end($arr); 
prev($arr);
echo current($arr) ; 

echo "<h3>61. range — создаёт массив диапазона</h3>";
$arr = range(1,5);
print_r($arr);

echo "<h3>62. reset — первый элемент массива</h3>";
$arr = [10,20,30];
reset($arr);
echo current($arr) ;

echo "<h3>63. rsort — сортировка по убыванию</h3>";
$arr = [3,1,4,2];
rsort($arr);
print_r($arr);

echo "<h3>64. shuffle — перемешивание массива</h3>";
$arr = [1,2,3,4,5];
shuffle($arr);
print_r($arr);

echo "<h3>65. sizeof — псевдоним count</h3>";
$arr = [1,2,3,4,5,6,7,8,9,10];
echo sizeof($arr) ;

echo "<h3>66. sort — сортировка по возрастанию</h3>";
$arr = [3,1,4,2];
sort($arr);
print_r($arr);
?>

