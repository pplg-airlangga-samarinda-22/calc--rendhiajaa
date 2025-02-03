<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = '';

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = ($num2 != 0) ? $num1 / $num2 : 'Error: Division by zero';
                break;
            default:
                $result = 'Invalid Operator';
        }
    } else {
        $result = 'Invalid Input';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <div>
            <label>Angka Pertama</label>
            <input type="text" name="num1" required>
        </div>
        <div>
            <label>Operator</label>
            <select name="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>
        <div>
            <label>Angka Kedua</label>
            <input type="text" name="num2" required>
        </div>
        <div>
            <button type="submit">Hitung</button>
        </div>
    </form>

    <?php if (isset($result)) { ?>
        <div margin-top: 20px;">
            <strong>Hasil: <?php echo $result; ?></strong>
        </div>
    <?php } ?>
</body>
</html>
