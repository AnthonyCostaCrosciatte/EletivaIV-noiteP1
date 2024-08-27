<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício de Média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Cálculo da Média de notas</h1>
      <form method="post" action="">
        <div class="mb-3">
          <label for="nota1" class="form-label">Primeira Nota:</label>
          <input type="number" class="form-control" id="nota1" name="nota1" step="0.01" required>
        </div>
        <div class="mb-3">
          <label for="nota2" class="form-label">Segunda Nota:</label>
          <input type="number" class="form-control" id="nota2" name="nota2" step="0.01" required>
        </div>
        <div class="mb-3">
          <label for="nota3" class="form-label">Terceira Nota:</label>
          <input type="number" class="form-control" id="nota3" name="nota3" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular Média</button>
      </form>

      <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            try {
                $nota1 = (float) $_POST['nota1'] ?? 0;
                $nota2 = (float) $_POST['nota2'] ?? 0;
                $nota3 = (float) $_POST['nota3'] ?? 0;

                $media = ($nota1 + $nota2 + $nota3) / 3;
                echo "<p class='mt-3'>Média das Notas: " . number_format($media, 2) . "</p>";
            } catch (Exception $e) {
                echo "<p class='text-danger'>Erro! " . $e->getMessage() . "</p>";
            }
        }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
