<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4"> Em Ordem Crescente </h2>
        <form action="respexer3.php" method="post">
            <div class="mb-3">
                <label for="valorA" class="form-label">Valor A</label>
                <input type="number" name="valorA" id="valorA" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="valorB" class="form-label">Valor B</label>
                <input type="number" name="valorB" id="valorB" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>
