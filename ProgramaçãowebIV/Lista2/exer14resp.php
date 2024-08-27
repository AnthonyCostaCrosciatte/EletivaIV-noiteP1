<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado da Conversão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Resultado da Conversão</h1>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            try {
                $quilometros = (float) $_POST['quilometros'] ?? 0;

                $milhas = $quilometros * 0.621371;
                echo "<p class='mt-3'>Resultado: " . number_format($milhas, 2) . " milhas</p>";
            } catch (Exception $e) {
                echo "<p class='text-danger'>Erro! " . $e->getMessage() . "</p>";
            }
        }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
