<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Soma de Dois Valores</h2>
        <form action="respexer2.php" method="post">
            <div class="mb-3">
                <label for="valor1" class="form-label"> Valor 1:</label>
                <input type="number" name="valor1" id="valor1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label"> Valor 2:</label>
                <input type="number" name="valor2" id="valor2" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Calcular </button>
        </form>
    </div>
</body>
</html>
