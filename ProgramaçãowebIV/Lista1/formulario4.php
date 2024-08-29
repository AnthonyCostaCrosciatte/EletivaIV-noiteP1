<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="my-4">Formulário 4 - Novo Usuário</h1>
    
    <form action="process_user.php" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required>
        </div>

        <div class="form-group row">
            <div class="col-md-6">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o CPF..." required>
            </div>
            <div class="col-md-6">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o endereço..." required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Informe o email..." required>
            </div>
            <div class="col-md-6">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe a senha..." required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-3">
                <label for="nivel">Nível:</label>
                <select class="form-control" id="nivel" name="nivel" required>
                    <option value="" disabled selected>---</option>
                    <option value="1">Admin</option>
                    <option value="2">Usuário</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="" disabled selected>---</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-secondary">Cancelar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
