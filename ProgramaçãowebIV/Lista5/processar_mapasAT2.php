<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado dos Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Médias dos Alunos</h1>
      <?php
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nomes = $_POST['nomes'];
        $notas1 = $_POST['notas1'];
        $notas2 = $_POST['notas2'];
        $notas3 = $_POST['notas3'];
        $alunos = [];

        for ($i = 0; $i < count($nomes); $i++) {
          $nome = $nomes[$i];
          $media = ($notas1[$i] + $notas2[$i] + $notas3[$i]) / 3;
          $alunos[$nome] = round($media, 2); 
        }

        arsort($alunos);

        echo "<h2>Lista de Alunos por Média</h2><ul class='list-group'>";
        foreach ($alunos as $nome => $media) {
          echo "<li class='list-group-item'><strong>$nome:</strong> Média = $media</li>";
        }
        echo "</ul>";
      }
      ?>
      <a href="form_mapaAT2.php" class="btn btn-secondary mt-3">Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
