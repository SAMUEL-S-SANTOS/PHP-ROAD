<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exemplo de Funções na mesma página</title>
</head>
<body>
     <h1>Exemplo de Funções na mesma pagina</h1>

    <form method="POST" action="">
        <label for="numero1">Número 1:</label>
        <input type="text" name="numero1" id="numero1"><br>
        
        <label for="numero2">Número 2:</label>
        <input type="text" name="numero2" id="numero2"><br>

        <input type="submit" name="enviar" value="Calcular Soma">
    </form>

    <?php

    if (isset($_POST['enviar'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];


        $resultado = somar($numero1, $numero2);
        echo "<p>A soma de $numero1 e $numero2 é igual a: $resultado</p>";
    }
    function somar ($numero1, $numero2) {
        $soma = $numero1 + $numero2;
        return $soma;
    }
    ?>
</body>
</html>