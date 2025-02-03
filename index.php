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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 400px;
        }
        .card {
            padding: 15px;
        }
        .form-control, .form-select {
            font-size: 14px;
        }
        .btn {
            width: 100%;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Kalkulator Sederhana</h2>
        <form method="post" class="card">
            <div class="mb-3">
                <label class="form-label">Angka Pertama</label>
                <input type="text" name="num1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Operator</label>
                <select name="operator" class="form-select" required>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>  
            <div class="mb-3">
                <label class="form-label">Angka Kedua</label>
                <input type="text" name="num2" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-dark">Hitung</button>
        </form>
        <?php if (isset($result)) { ?>
            <div class="alert alert-info mt-3">Hasil: <?php echo $result; ?></div>
        <?php } ?>
    </div>
</body>
</html>
