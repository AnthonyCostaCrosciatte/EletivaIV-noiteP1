<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do Exercício 3</title>
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
                $valorA = $_POST['valorA'];
                $valorB = $_POST['valorB'];

                if ($valorA == $valorB) {
                    echo "<p>Números iguais: $valorA</p>";
                } else {
                    $menor = min($valorA, $valorB);
                    $maior = max($valorA, $valorB);
                    echo "<p>Ordem crescente: $menor $maior</p>";
                }
            } catch (Exception $e)
            {
                echo "<p class='text-danger'>Erro: ".$e->getMessage()."</p>";
            }
        }
        ?>
    </div>
</body>
</html>
