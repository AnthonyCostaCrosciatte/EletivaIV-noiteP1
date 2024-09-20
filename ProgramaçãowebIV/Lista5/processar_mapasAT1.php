<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado dos Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Lista de Contatos</h1>
      <?php
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nomes = $_POST['nomes'];
        $telefones = $_POST['telefones'];
        $contatos = [];

        $duplicado = false;

        for ($i = 0; $i < count($nomes); $i++) {
          $nome = $nomes[$i];
          $telefone = $telefones[$i];
          if (in_array($nome, array_keys($contatos))) {
            echo "<p class='text-danger'>O nome '$nome' já foi adicionado.</p>";
            $duplicado = true;
          } elseif (in_array($telefone, $contatos)) {
            echo "<p class='text-danger'>O telefone '$telefone' já foi adicionado.</p>";
            $duplicado = true;
          } else {
            $contatos[$nome] = $telefone;
          }
        }

        if (!$duplicado) {
          ksort($contatos); 
          echo "<h2>Lista de Contatos</h2><ul class='list-group'>";
          foreach ($contatos as $nome => $telefone) {
            echo "<li class='list-group-item'><strong>$nome:</strong> $telefone</li>";
          }
          echo "</ul>";
        }
      }
      ?>
      <a href="form_mapaAT1.php" class="btn btn-secondary mt-3">Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
