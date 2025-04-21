<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<Style>

    
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
    }
    
    .container {
        background-color: #fff;
        padding: 30px 40px;
        margin-top: 60px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 450px;
    }
    
    h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }
    
    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    
    label {
        font-weight: bold;
        color: #444;
    }
    
    input[type="number"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
    }

    .radio-group {
    display: flex;
    gap: 8px;
    margin-bottom: 15px;
}

.radio-group label {
    font-weight: normal;
    color: #333;
}

    
    button {
        padding: 12px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }
    
    button:hover {
        background-color: #218838;
    }
    
    h3 {
        margin-top: 15px;
        color: #333;
    }
    </Style>
    
</head>
<body>
   <div class="container">
    <h2>DISKON BELANJAAN</h2>
    <form action="" method="POST">
        <label for="harga">Harga Barang</label>
        <input type="number" id="harga" name="harga" step="any" required>
        <br>
        <label>Diskon (%)</label>
    <div class="radio-group">
        <label><input type="radio" name="diskon" value="10" required> 10%</label>
        <label><input type="radio" name="diskon" value="20"> 20%</label>
        <label><input type="radio" name="diskon" value="30"> 30%</label>
        <label><input type="radio" name="diskon" value="50"> 50%</label>
    </div>

        <br>
        <button type="submit" name="submit">Hitung</button>
    </form>

    <?php
    $harga = 0;
    $diskon = 0;
    $total_diskon = 0;
    $total_bayar = 0;
    $error ='';

if (isset($_POST['submit'])) {
    $harga = floatval($_POST['harga']);
    $diskon = floatval($_POST['diskon']);

    if ($harga <= 0 || $diskon < 0 || $diskon > 100) {
        $error = "harga harus lebih dari 0 dan diskon antara 0-100%";
    } else{
        $total_diskon = $harga * $diskon / 100;
        $total_bayar = $harga - $total_diskon;
    }
}
?>

<?php if ($error) : ?>
    <h3 style="color: red;"><?php echo $error; ?></h3>
<?php elseif (isset($_POST['submit'])): ?>
    <h3>Harga = Rp. <?php echo number_format($harga,2,',','.');?></h3>
    <h3>Diskon Harga = Rp. <?php echo number_format($total_diskon,2,',','.');?></h3>
    <h3>Harga Bayar = Rp. <?php echo number_format($total_bayar,2,',','.');?></h3>

<?php endif; ?>

   </div> 
</body>
</html>