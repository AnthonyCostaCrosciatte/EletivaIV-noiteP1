<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Formulário 1</h1>
        <form>
            <div class="row mb-3">
                <div class="col">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Mark">
                </div>
                <div class="col">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Otto">
                </div>
                <div class="col">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" placeholder="City">
                </div>
                <div class="col">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" id="state" placeholder="State">
                </div>
                <div class="col">
                    <label for="zip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder="Zip">
                </div>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="terms">
                <label class="form-check-label" for="terms">Agree to terms and conditions</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit form</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
