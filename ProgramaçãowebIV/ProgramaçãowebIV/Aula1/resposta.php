<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor = $_POST['valor']; //isso aqui é o input da pagina index.php....
        echo "valor informado: $valor"; //para exibir frases usar ""...
        $valor = (int) $_POST['valor'];
        $valor = (float) $_POST['valor'];
        $valor = (string) $_POST['valor'];
        //$valor = (bool) $_POST['valor'];
        //(se quiser usar com aspas simples) echo 'Valor informado: '.$valor;
    ?>
</body>
</html>