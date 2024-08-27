<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cálculadora de Juros Simples: </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-5">
    <h1>Cálculo de Juros Simples</h1>
    <form method="post" action="exer17resp.php">
        <div class="mb-3">
            <label for="capital" class="form-label">Capital (em R$):</label>
            <input type="number" class="form-control" name="capital" id="capital" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="taxa" class="form-label">Taxa de Juros (% ao ano):</label>
            <input type="number" class="form-control" name="taxa" id="taxa" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="periodo" class="form-label">Período (em anos):</label>
            <input type="number" class="form-control" name="periodo" id="periodo" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular Juros</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
  </body>
</html>
