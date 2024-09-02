<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do Exercício 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4"> Contagem Regressiva: </h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero = $_POST['numero'];

            if ($numero > 0) {
                echo "<p>Contagem regressiva de $numero até 1:</p>";
                echo "<ul>";
                do {
                    echo "<li>$numero</li>";
                    $numero--;
                } while ($numero >= 1);
                echo "</ul>";
            } else {
                echo "<p class='text-danger'>Por favor, insira um número maior que 0.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
