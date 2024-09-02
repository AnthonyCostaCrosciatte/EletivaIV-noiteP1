<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do Exercício 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Resultados da Soma dos Números: </h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero = $_POST['numero'];
            $soma = 0;
            $i = 1;

            while ($i <= $numero) {
                $soma += $i;
                $i++;
            }

            echo "<p>A soma de todos os números de 1 até $numero é: $soma</p>";
        }
        ?>
    </div>
</body>
</html>
