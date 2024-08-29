<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereço de Cobrança</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="my-4">Formulário 5 - Endereço de Cobrança</h1>
    
    <form action="process_billing.php" method="post">
        <div class="form-group row">
            <div class="col-md-6">
                <label for="first_name">First name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required>
            </div>
            <div class="col-md-6">
                <label for="last_name">Last name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" required>
            </div>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email (Optional)</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
        </div>

        <div class="form-group">
            <label for="address2">Address 2 (Optional)</label>
            <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
        </div>

        <div class="form-group row">
            <div class="col-md-4">
                <label for="country">Country</label>
                <select class="form-control" id="country" name="country" required>
                    <option value="" disabled selected>Choose...</option>
                    <option value="BR">Brazil</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="state">State</label>
                <select class="form-control" id="state" name="state" required>
                    <option value="" disabled selected>Choose...</option>
                    <option value="SP">São Paulo</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="MG">Minas Gerais</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    <!-- Botão de Voltar -->
    <div class="mt-3">
        <button onclick="window.history.back();" class="btn btn-secondary">Voltar</button>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
