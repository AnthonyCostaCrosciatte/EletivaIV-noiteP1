<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado do Desconto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>O valor com Desconto: </h1>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            try {
                $preco = (float) $_POST['preco'] ?? 0;
                $desconto = (float) $_POST['desconto'] ?? 0;

                if ($desconto >= 0 && $desconto <= 100) {
                    $valor_desconto = $preco * ($desconto / 100);
                    $preco_com_desconto = $preco - $valor_desconto;
                    echo "<p class='mt-3'>Preço com Desconto: R$ " . number_format($preco_com_desconto, 2, ',', '.') . "</p>";
                } else {
                    echo "<p class='text-danger'>Por favor, insira um percentual de desconto válido (entre 0 e 100).</p>";
                }
            } catch (Exception $e) {
                echo "<p class='text-danger'>Erro! " . $e->getMessage() . "</p>";
            }
        }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
