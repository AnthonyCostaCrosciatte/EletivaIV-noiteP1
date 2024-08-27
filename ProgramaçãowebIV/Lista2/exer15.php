<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cálculador de IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-5">
    <h1>Cálculadora de IMC</h1>
    <form method="post" action="exer15resp.php">
        <div class="mb-3">
            <label for="peso" class="form-label">Peso (em kg):</label>
            <input type="number" class="form-control" name="peso" id="peso" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="altura" class="form-label">Altura (em metros):</label>
            <input type="number" class="form-control" name="altura" id="altura" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular IMC</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
  </body>
</html>
