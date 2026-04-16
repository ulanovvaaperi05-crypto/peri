<?php
echo "<h3>1-задание</h3>";
echo "<h4>со специальной функцией</h4>";
$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5];
$sum = array_sum($nums);
echo "Сумма: " . $sum;


echo "<h4>без встроенной функции</h4>";
$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5];
$sum = 0;
foreach ($nums as $num) {
    $sum += $num;
}
echo "Сумма: " . $sum. "<br>";





echo "<h3>2-задание</h3>";
echo "<h4>со специальной функцией</h4>";
$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5];
$evenNumbers = array_filter($nums, function($num) {
    return $num % 2 === 0;
});
$count = count($evenNumbers);
echo "Количество четных чисел: " . $count;

echo "<h4>без встроенной функции</h4>";
$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5];
$count = 0;
foreach ($nums as $num) {
    if ($num % 2 === 0) {
        $count++;
    }
}
echo "Количество четных чисел: " . $count. "<br>";





echo "<h3>3-задание</h3>";echo "<pre>";
echo "<h3>без специальной функции</h3>";
$nums = [];
for ($i = 1; $i <= 100; $i++) {
    $nums[] = $i;
}
print_r($nums);echo "<pre>";

echo "<h3>со специальной функции</h3>";
$nums = range(1, 100);
print_r($nums);
?>