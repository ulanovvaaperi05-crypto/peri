<?php
$rows = 0;
$cols = 0;

if (isset($_GET['rows']) && isset($_GET['cols'])) {
    $rows = (int)$_GET['rows'];
    $cols = (int)$_GET['cols'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Шахматная таблица </title>
</head>
<body>

<h3>Введите размер таблицы</h3>

<form method="get">
    Строки: <input type="number" name="rows" required>
    Столбцы: <input type="number" name="cols" required>
    <button type="submit">Создать</button>
</form>

<br>

<?php
if ($rows > 0 && $cols > 0) {

    echo "<table border='1'  cellpadding='5'
    style='border-collapse:collapse;
           border-top:20px solid green;
           border-left:20px solid green;'>";

    for ($row = 0; $row < $rows; $row++) {
        echo "<tr>";

        for ($col = 0; $col < $cols; $col++) {

            
            $cell = ($row + $col) % 2;

            
            switch ($cell) {
                case 0:
                    $color = "pink";
                    break;
                case 1:
                    $color = "white";
                    break;
                default:
            }

            echo "<td style='background-color:$color; width:40px; height:40px;'></td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}
?>
</body>
</html>
