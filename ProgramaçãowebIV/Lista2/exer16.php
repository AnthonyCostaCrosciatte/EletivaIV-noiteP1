<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cálculadora de Desconto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-5">
    <h1>Cálculo de Desconto</h1>
    <form method="post" action="exer16resp.php">
        <div class="mb-3">
            <label for="preco" class="form-label">Preço Original (em R$):</label>
            <input type="number" class="form-control" name="preco" id="preco" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="desconto" class="form-label">Percentual de Desconto (%):</label>
            <input type="number" class="form-control" name="desconto" id="desconto" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
