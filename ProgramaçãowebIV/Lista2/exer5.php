<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lançar notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-5">
    <h1>Inserir: </h1>
    <form method="post" action="exer5resp.php">
        <div class="row mb-3">
            <div class="col">
                <label for="valor1" class="form-label">Primeiro Número:</label>
                <input type="number" class="form-control" name="valor1" id="valor1" step="0.01" required>
            </div>
            <div class="col">
                <label for="valor2" class="form-label">Segundo Número:</label>
                <input type="number" class="form-control" name="valor2" id="valor2" step="0.01" required>
            </div>
            <div class="col">
                <label for="valor3" class="form-label">Terceiro Número:</label>
                <input type="number" class="form-control" name="valor3" id="valor3" step="0.01" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
