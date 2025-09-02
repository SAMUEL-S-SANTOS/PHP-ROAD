<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resultado da soma</title>
</head>
<body>
    <h1>Resultado da soma</h1>

    <?php

    include 'funcoes.php';

    if (isset($_POST['enviar'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        $resultado = somar($numero1, $numero2);

        echo "A sp,a de $numero1 e $numero2 é igual a: $resultado"; 
    } else {
        echo "Por favor, preencha o formulário e envie os valores.";
    }
    ?>
</body>
</html>