<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do Exercício 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4"> Todos os Números até o Valor Informado: </h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero = $_POST['numero'];

            if ($numero > 0) {
                echo "<p>Números de 1 até $numero:</p>";
                echo "<ul>";
                for ($i = 1; $i <= $numero; $i++) {
                    echo "<li>$i</li>";
                }
                echo "</ul>";
            } else {
                echo "<p class='text-danger'>Por favor, insira um número maior que 0.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
