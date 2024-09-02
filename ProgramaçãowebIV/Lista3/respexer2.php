<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados do Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Resultado: </h2>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            try
            {
                $valor1 = $_POST['valor1'];
                $valor2 = $_POST['valor2'];

                $soma = $valor1 + $valor2;

                if ($valor1 == $valor2) {
                    $resultado = $soma * 3;
                } else {
                    $resultado = $soma;
                }

                echo "<p>Soma: $resultado</p>";
            } catch (Exception $e)
            {
                echo "<p class='text-danger'>Erro: ".$e->getMessage()."</p>";
            }
        }
        ?>
    </div>
</body>
</html>
