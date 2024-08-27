<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calcular Velocidade Média </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-5">
    <h1>Calculadora de Velocidade Média: </h1>
    <form method="post" action="exer20resp.php">
        <div class="mb-3">
            <label for="distancia" class="form-label">Distância (em km):</label>
            <input type="number" class="form-control" name="distancia" id="distancia" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="tempo" class="form-label">Tempo (em horas):</label>
            <input type="number" class="form-control" name="tempo" id="tempo" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
  </body>
</html>
