<!DOCTYPE html>
<html>
<head>
    <title>Конвертер температуры</title>
</head>
<body>

<h2>Конвертер температуры</h2>

<form method="post" action="">
    <input type="radio" name="unit" value="celsius" required> Введите градусы Цельсия
    <input type="radio" name="unit" value="fahrenheit" required> Введите градусы Фаренгейта<br><br>
    <input type="text" name="temperature" required>
    <input type="submit" value="Конвертировать">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['unit'] == 'celsius') {
        $celsius = $_POST['temperature'];
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "Температура в градусах Фаренгейта: " . $fahrenheit;
    } elseif ($_POST['unit'] == 'fahrenheit') {
        $fahrenheit = $_POST['temperature'];
        $celsius = ($fahrenheit - 32) * 5/9;
        echo "Температура в градусах Цельсия: " . $celsius;
    }
}
?>

</body>
</html>



