<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta Exercicio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
      <div class="row">
        <div class="col">
          <?php
            function calculadoraRaizQuadrada($valor) {
              return sqrt($valor);  
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $valor = $_POST['valor'];

              if ($valor >= 0) {
                $resultado = calculadoraRaizQuadrada($valor);
                echo "<p>A raiz quadrada de <strong>" . htmlspecialchars($valor) . "</strong> é <strong>" . number_format($resultado, 2) . "</strong>.</p>";
              } else {
                echo "<p><strong>Erro:</strong> Não é possível calcular a raiz quadrada de um número negativo.</p>";
              }
            }
          ?>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
