<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do Exercício 4</title>
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
                $valorProduto = $_POST['valorProduto'];

                if ($valorProduto > 100.00) {
                    $desconto = $valorProduto * 0.15;
                    $novoValor = $valorProduto - $desconto;
                    echo "<p>O valor original do produto era R$$valorProduto.</p>";
                    echo "<p>Com o desconto de 15%, o novo valor é R$$novoValor.</p>";
                } else {
                    echo "<p>O valor do produto é R$$valorProduto. Não há desconto aplicado.</p>";
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
