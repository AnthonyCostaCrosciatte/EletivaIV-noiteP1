<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Selecionar o Mês: </h2>
        <form action="respexer5.php" method="post">
            <div class="mb-3">
                <label for="mes" class="form-label"> Digite o número do mês (entre 1 e 12)</label>
                <input type="number" name="mes" id="mes" class="form-control" min="1" max="12" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>
