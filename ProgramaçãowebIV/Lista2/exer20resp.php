<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado /title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Resultado da Velocidade Média: </h1>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            try {
                $distancia = (float) $_POST['distancia'] ?? 0;
                $tempo = (float) $_POST['tempo'] ?? 0;

                if ($tempo > 0) {
                    $velocidade_media = $distancia / $tempo;
                    echo "<p>Velocidade Média: " . number_format($velocidade_media, 2) . " km/h</p>";
                } else {
                    echo "<p class='text-danger'>Erro! O tempo deve ser maior que zero.</p>";
                }
            } catch (Exception $e) {
                echo "<p class='text-danger'>Erro! " . $e->getMessage() . "</p>";
            }
        }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
  </body>
</html>
