<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado de Juros Compostos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Resultado dos Juros Compostos: </h1>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            try {
                $capital = (float) $_POST['capital'] ?? 0;
                $taxa = (float) $_POST['taxa'] / 100; 
                $periodo = (float) $_POST['periodo'] ?? 0;

                $montante = $capital * pow(1 + $taxa, $periodo);
                echo "<p class='mt-3'>Montante com Juros Compostos: R$ " . number_format($montante, 2, ',', '.') . "</p>";
            } catch (Exception $e) {
                echo "<p class='text-danger'>Erro! " . $e->getMessage() . "</p>";
            }
        }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
  </body>
</html>
