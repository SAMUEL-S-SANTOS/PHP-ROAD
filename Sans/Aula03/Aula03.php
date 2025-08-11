<?php  
    $num01 = filter_input(INPUT_POST, "txtNumeros01");
    $num02 = filter_input(INPUT_POST, "txtNumeros02");
    $result = ($num01 + $num02);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario html >> PHP</title>
</head>
<body>
    <form method="post">
        <label>Numero 1 : <input type="text" name="txtNumeros01"/></label><br>
        <label>Numero 2 : <input type="text" name="txtNumeros02"/></label><br>
        <br>
        <input type="submit" name="btnCalcular" value="Calcular">
    </form>

    <h1>Resultado</h1>
    <h1><?php echo $result; ?></h1>
</body>
</html>
