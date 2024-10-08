<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício de Subtração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Subtrair numeros</h1>
      <form method="post" action="">
        <div class="mb-3">
          <label for="valor1" class="form-label">Primeiro Número:</label>
          <input type="number" class="form-control" id="valor1" name="valor1" required>
        </div>
        <div class="mb-3">
          <label for="valor2" class="form-label">Segundo Número:</label>
          <input type="number" class="form-control" id="valor2" name="valor2" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular: </button>
      </form>

      <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            try {
                $valor1 = (int) $_POST['valor1'] ?? 0;
                $valor2 = (int) $_POST['valor2'] ?? 0;
                $resultado = $valor1 - $valor2;
                echo "<p class='mt-3'>Resultado da Subtração: $resultado</p>";
            } catch (Exception $e) {
                echo "<p class='text-danger'>Erro! " . $e->getMessage() . "</p>";
            }
        }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
