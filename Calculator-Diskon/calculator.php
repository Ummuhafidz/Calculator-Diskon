<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #0b1c2c;
        font-family: 'Segoe UI', sans-serif;
    }

    .calculator {
        background: #112b40;
        border-radius: 30px;
        padding: 30px 25px;
        width: 320px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        color: white;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    input[type="number"],
    select,
    button {
        padding: 15px;
        font-size: 18px;
        border: none;
        border-radius: 20px;
        outline: none;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        transition: background 0.3s ease;
    }

    input::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    select {
        appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill="white" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 20px;
    }

    button {
        background-color: #1abc9c;
        font-weight: bold;
        cursor: pointer;
        color: white;
    }

    button:hover {
        background-color: #16a085;
    }

    .result-box {
        margin-top: 20px;
        font-size: 24px;
        background-color: rgba(255, 255, 255, 0.1);
        padding: 15px;
        border-radius: 15px;
        text-align: center;
        font-weight: bold;
    }
</style>

</head>
<body>
    <div class="calculator">
        <form action="" method="post">
            <input type="number" step="any" name="num1" required
            placeholder="Angka pertama">
            <select name="operator" >
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" step="any" name="num2" required
            placeholder="Angka kedua">
            <button type="submit" name="calculate">Hitung</button>

        </form>
        <?php
        if (isset($_POST['calculate'])) {
          $num1 = (float) $_POST ['num1'];
          $num2 = (float) $_POST ['num2'];
        $operator = $_POST['operator'];
        $result = '';

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 + $num2;
                break;
            case '*':
                $result = $num1 + $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    $result = "Error: pembagian dengan nol!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default;
                $result = "operator tidak valid";
                break;
        }
        echo "<div class='result-box'>Hasil: $result</div>";
        }

        ?>
    </div>
    
</body>
</html>