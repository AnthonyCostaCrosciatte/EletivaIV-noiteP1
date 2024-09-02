<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do Exercício 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Resultado da conta Fatorial: </h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero = $_POST['numero'];
            $fatorial = 1;

            if ($numero >= 0) {
                for ($i = 1; $i <= $numero; $i++) {
                    $fatorial *= $i;
                }
                echo "<p>O fatorial de $numero é: $fatorial</p>";
            } else {
                echo "<p class='text-danger'>Por favor, insira um número não negativo.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
