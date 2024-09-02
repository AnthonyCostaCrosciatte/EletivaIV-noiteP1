<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4"> Calculadora de Desconto: </h2>
        <form action="respexer4.php" method="post">
            <div class="mb-3">
                <label for="valorProduto" class="form-label">Valor respectivo do Produto (R$)</label>
                <input type="number" step="0.01" name="valorProduto" id="valorProduto" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
</body>
</html>
