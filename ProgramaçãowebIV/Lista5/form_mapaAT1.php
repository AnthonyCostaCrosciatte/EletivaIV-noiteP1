<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Cadastro de Contatos</h1>
      <form action="processar_mapasAT1.php" method="POST">
        <?php for($i=1; $i<=5; $i++): ?>
          <div class="mb-3">
            <label for="nome<?=$i?>" class="form-label">Nome do Contato <?=$i?></label>
            <input type="text" class="form-control" id="nome<?=$i?>" name="nomes[]" required>
          </div>
          <div class="mb-3">
            <label for="telefone<?=$i?>" class="form-label">Telefone do Contato <?=$i?></label>
            <input type="text" class="form-control" id="telefone<?=$i?>" name="telefones[]" required>
          </div>
        <?php endfor; ?>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
