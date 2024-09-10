<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta Exercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
      <div class="row">
        <div class="col">
          <?php
            function verificarSeContem($palavra1, $palavra2) {
              return strpos($palavra1, $palavra2) !== false;  
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $palavra1 = $_POST['palavra1'];
              $palavra2 = $_POST['palavra2'];

              if (verificarSeContem($palavra1, $palavra2)) {
                echo "<p>A palavra <strong>'" . htmlspecialchars($palavra2) . "'</strong> está contida na palavra <strong>'" . htmlspecialchars($palavra1) . "'</strong>.</p>";
              } else {
                echo "<p>A palavra <strong>'" . htmlspecialchars($palavra2) . "'</strong> não está contida na palavra <strong>'" . htmlspecialchars($palavra1) . "'</strong>.</p>";
              }
            }
          ?>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
