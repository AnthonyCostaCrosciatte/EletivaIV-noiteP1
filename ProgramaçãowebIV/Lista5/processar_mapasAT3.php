<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Produtos com Desconto</h1>
      <?php
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $codigos = $_POST['codigos'];
        $nomes = $_POST['nomes'];
        $precos = $_POST['precos'];
        $produtos = [];

        for ($i = 0; $i < count($codigos); $i++) {
          $codigo = $codigos[$i];
          $nome = $nomes[$i];
          $preco = $precos[$i];

          if ($preco > 100) {
            $preco *= 0.9; 
          }

          $produtos[$codigo] = [
            'nome' => $nome,
            'preco' => round($preco, 2) 
          ];
        }

        uasort($produtos, function($a, $b) {
          return strcmp($a['nome'], $b['nome']);
        });

        echo "<h2>Lista de Produtos</h2><ul class='list-group'>";
        foreach ($produtos as $codigo => $produto) {
          echo "<li class='list-group-item'><strong>Código:</strong> $codigo - <strong>Nome:</strong> {$produto['nome']} - <strong>Preço:</strong> R$ {$produto['preco']}</li>";
        }
        echo "</ul>";
      }
      ?>
      <a href="form_mapaAT3.php" class="btn btn-secondary mt-3">Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
