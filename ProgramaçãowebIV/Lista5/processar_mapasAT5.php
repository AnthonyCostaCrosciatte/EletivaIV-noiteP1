<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Livros em Estoque</h1>
      <?php
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $titulos = $_POST['titulos'];
        $estoques = $_POST['estoques'];
        $livros = [];

        for ($i = 0; $i < count($titulos); $i++) {
          $titulo = $titulos[$i];
          $estoque = $estoques[$i];

          $livros[$titulo] = $estoque;
        }

        ksort($livros);

        echo "<h2>Lista de Livros</h2><ul class='list-group'>";
        foreach ($livros as $titulo => $estoque) {
          $alerta = $estoque < 5 ? "<span class='badge bg-danger ms-2'>Baixa Quantidade!</span>" : "";
          echo "<li class='list-group-item'><strong>Título:</strong> $titulo - <strong>Estoque:</strong> $estoque $alerta</li>";
        }
        echo "</ul>";
      }
      ?>
      <a href="form_mapaAT5.php" class="btn btn-secondary mt-3">Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
