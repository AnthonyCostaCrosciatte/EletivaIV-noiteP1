<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
      <form action="exer4resp.php" method="post">
        <div class="row">
          <div class="col-md-4">
            <label for="dia" class="form-label">Digite o Dia:</label>
            <input type="number" class="form-control" name="dia" id="dia" min="1" max="31">
          </div>
          <div class="col-md-4">
            <label for="mes" class="form-label">Digite o Mês:</label>
            <input type="number" class="form-control" name="mes" id="mes" min="1" max="12">
          </div>
          <div class="col-md-4">
            <label for="ano" class="form-label">Digite o Ano:</label>
            <input type="number" class="form-control" name="ano" id="ano">
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
