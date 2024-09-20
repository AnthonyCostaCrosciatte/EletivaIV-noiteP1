<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Cadastro de Alunos e Notas</h1>
      <form action="processar_mapasAT2.php" method="POST">
        <?php for($i=1; $i<=5; $i++): ?>
          <div class="mb-3">
            <label for="nome<?=$i?>" class="form-label">Nome do Aluno <?=$i?></label>
            <input type="text" class="form-control" id="nome<?=$i?>" name="nomes[]" required>
          </div>
          <div class="mb-3">
            <label for="nota1_<?=$i?>" class="form-label">Nota 1 do Aluno <?=$i?></label>
            <input type="number" class="form-control" id="nota1_<?=$i?>" name="notas1[]" min="0" max="10" step="0.1" required>
          </div>
          <div class="mb-3">
            <label for="nota2_<?=$i?>" class="form-label">Nota 2 do Aluno <?=$i?></label>
            <input type="number" class="form-control" id="nota2_<?=$i?>" name="notas2[]" min="0" max="10" step="0.1" required>
          </div>
          <div class="mb-3">
            <label for="nota3_<?=$i?>" class="form-label">Nota 3 do Aluno <?=$i?></label>
            <input type="number" class="form-control" id="nota3_<?=$i?>" name="notas3[]" min="0" max="10" step="0.1" required>
          </div>
        <?php endfor; ?>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
