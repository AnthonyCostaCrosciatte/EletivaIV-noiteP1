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
                $dias = (float) $_POST['dias'] ?? 0;

                $horas = $dias * 24;
                $minutos = $horas * 60;
                $segundos = $minutos * 60;

                echo "<p>Valor em Horas: " . number_format($horas, 2) . "</p>";
                echo "<p>Valor em Minutos: " . number_format($minutos, 2) . "</p>";
                echo "<p>Valor em Segundos: " . number_format($segundos, 2) . "</p>";
            } catch (Exception $e) {
                echo "<p class='text-danger'>Erro! " . $e->getMessage() . "</p>";
            }
        }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
  </body>
</html>
