<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta Exercicio 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
      <div class="row">
        <div class="col">
          <?php
            function calcularDiferencaDias($data1, $data2) {
              $data1 = DateTime::createFromFormat('d/m/Y', $data1);
              $data2 = DateTime::createFromFormat('d/m/Y', $data2);
              
              if ($data1 && $data2) {
                $intervalo = $data1->diff($data2);
                return $intervalo->days;
              } else {
                return "Data inválida";
              }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $data1 = $_POST['data1'];
              $data2 = $_POST['data2'];
              $resultado = calcularDiferencaDias($data1, $data2);
              echo "<p>A diferença entre <strong>" . htmlspecialchars($data1) . "</strong> e <strong>" . htmlspecialchars($data2) . "</strong> é de <strong>" . htmlspecialchars($resultado) . "</strong> dias.</p>";
            }
          ?>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
