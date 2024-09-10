<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
      <form action="exer7resp.php" method="post">
        <div class="row">
          <div class="col-md-6">
            <label for="data1" class="form-label">Digite a Primeira Data (dd/mm/YYYY):</label>
            <input type="text" class="form-control" name="data1" id="data1" required>
          </div>
          <div class="col-md-6">
            <label for="data2" class="form-label">Digite a Segunda Data (dd/mm/YYYY):</label>
            <input type="text" class="form-control" name="data2" id="data2" required>
          </div>
          <div class="col-md-12 mt-4">
            <button type="submit" class="btn btn-primary">Calcular Diferença</button>
          </div>
        </div>
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
