<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Itens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Itens com Imposto</h1>
      <?php
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nomes = $_POST['nomes'];
        $precos = $_POST['precos'];
        $itens = [];

        for ($i = 0; $i < count($nomes); $i++) {
          $nome = $nomes[$i];
          $preco = $precos[$i];

          $preco_com_imposto = $preco * 1.15;

          $itens[$nome] = round($preco_com_imposto, 2); 
        }

        asort($itens);

        echo "<h2>Lista de Itens</h2><ul class='list-group'>";
        foreach ($itens as $nome => $preco_com_imposto) {
          echo "<li class='list-group-item'><strong>Nome:</strong> $nome - <strong>Preço com Imposto:</strong> R$ $preco_com_imposto</li>";
        }
        echo "</ul>";
      }
      ?>
      <a href="form_mapaAT4.php" class="btn btn-secondary mt-3">Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
