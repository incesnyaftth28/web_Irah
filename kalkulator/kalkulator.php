<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator</title>
</head>
<body>

 <h2> kalkulator sederhana </h2>  
 <form method="post">
 <input taype="namber" name="angka1" placeholder="angka pertama" required> 
<select name="operator" required>
    <option value="+">+</option> 
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>
<input taype="namber" name="angka2" placeholder="angka kedua" required>
<button type="sumbit" name="hitung">Hitung</button>
</form 

<?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
            case '+':
                    $hasil = $angka1 + $angka2;
                    break;
            case '+':
                    $hasil = $angka1 * $angka2;
                        break;
            case '/':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = 'tidak dapat membagi dengan nol';
                }
                break;
                default:
                $hasil = 'operator tidak valid';
                

</body>
</html>