<?php 
header('Content-Type: text/html; charset=utf-8');

/*
http://php.net/manual/ru/ref.strings.php
http://php.net/manual/ru/ref.mbstring.php

array explode ( string $delimiter , string $string [, int $limit ] )
string implode ( string $glue , array $pieces ) || join()
string trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] )
string rtrim ( string $str [, string $character_mask ] )
string ltrim ( string $str [, string $character_mask ] )
string md5 ( string $str [, bool $raw_output = false ] )
string sha1 ( string $str [, bool $raw_output = false ] )
string nl2br ( string $string [, bool $is_xhtml = true ] )

mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
mixed str_ireplace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
string strip_tags ( string $str [, string $allowable_tags ] )
int strlen ( string $string )

mixed mb_strlen ( string $str [, string $encoding = mb_internal_encoding() ] )
int mb_strpos ( string $haystack , string $needle [, int $offset = 0 [, string $encoding = mb_internal_encoding() ]] )
string mb_strtolower ( string $str [, string $encoding = mb_internal_encoding() ] )
string mb_strtoupper ( string $str [, string $encoding = mb_internal_encoding() ] )
string mb_substr ( string $str , int $start [, int $length = NULL [, string $encoding = mb_internal_encoding() ]] )
string htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )
string htmlspecialchars_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 ] )
string htmlentities ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )
*/
/*
$str = 'Иванов Иван Иванович';
//echo $str . '<br>'; 
$data = explode(' ', $str);
print_r($data);*/
/*
$data = ['Иванов', 'Иван', 'Иванович'];
//printf("%s %s %s", $data[0], $data[1], $data[2]);
echo $str = implode(' ', $data);*

/*$str = "\t<p>Hello</p>\n";
$str .= "\n<p>world!</p>\t";
// echo $str;
echo trim($str, "\t");*/
/*
$srt = "<p>Hello</p>";
$srt .= "<p>World!</p>";

$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
//var_dump($text, $binary, $hello);

$trimmed = ltrim($text);
echo ($trimmed);

$pass = 'password123';
echo $pass . '<br>';
echo md5($pass) . '<br>';
echo sha1($pass) . '<br>';*/


echo "<h3>1. explode()</h3>";
$text = "apple,banana,orange";
$result = explode(",", $text);
print_r($result);

echo "<h3>2. implode() </h3>";
$array = ["Информационные","Системы","и Технологии"];
echo implode(" - ", $array);

echo "<h3>3. trim()</h3>";
$text = "   Всем привет, завтра модуль   ";
echo trim($text);

echo "<h3>4. rtrim()</h3>";
$text = "Hello!!!";
echo rtrim($text,"!");

echo "<h3>5. ltrim()</h3>";
$text = "***Hello";
echo ltrim($text,"*");

echo "<h3>6. md5()</h3>";
echo md5("aiperisha");

echo "<h3>7. sha1()</h3>";
echo sha1("ulanovvvvaaa");

echo "<h3>8. nl2br()</h3>";
$text = "Hello\nAiperi\nUlanova";
echo nl2br($text);

echo "<h3>9. str_replace()</h3>";
$text = "Мое хобби рисование";
echo str_replace("рисование","танцы",$text);

echo "<h3>10. str_ireplace()</h3>";
$text = "Привет Айпери";
echo str_ireplace("Айпери","Эржан",$text);

echo "<h3>11. strip_tags()</h3>";
$html = "<b>Hello</b> <ul>World</ul>";
echo strip_tags($html);

echo "<h3>12. strlen()</h3>";
echo strlen("Прекрасная погода");

echo "<h3>13. mb_strlen()</h3>";
echo mb_strlen("Привет Айпери");

echo "<h3>14. mb_strpos()</h3>";
$str = "Высокие деревья!";
echo mb_strpos($str, "вья");

echo "<h3>15. mb_strtolower()</h3>";
echo mb_strtolower("УЛАНОВА");

echo "<h3>16. mb_strtoupper()</h3>";
echo mb_strtoupper("айпери ист(б)2-24");

echo "<h3>17. mb_substr()</h3>";
$prost="Кандайсынар группалаштар";
echo mb_substr($prost,0,6);

echo "<h3>18. htmlspecialchars()</h3>";
$text = "<h1>Title</h1>";
echo htmlspecialchars($text);

echo "<h3>19. htmlspecialchars_decode()</h3>";
$text = htmlspecialchars("<i>Университеты </i><b>Кыргызстана</b><li>КГУ</li><li>КГТУ</li><li>МУК</li>");
echo htmlspecialchars_decode($text);

echo "<h3>20. htmlentities()</h3>";
$text = "<b>IST(b)2-24</b>";
echo htmlentities($text);



?>