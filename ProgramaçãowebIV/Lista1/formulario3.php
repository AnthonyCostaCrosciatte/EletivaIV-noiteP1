<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 3</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="my-4">Formulário 3</h1>
    
    <form action="process_form.php" method="post">
        <div class="form-group row">
            <div class="col-md-6">
                <label for="partnerName">Partner Name</label>
                <input type="text" class="form-control" id="partnerName" name="partnerName" required>
            </div>
            <div class="col-md-6">
                <label for="partnerEmail">Partner Email ID</label>
                <input type="email" class="form-control" id="partnerEmail" name="partnerEmail" required>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-md-6">
                <label for="partnerLegalName">Partner Legal Name</label>
                <input type="text" class="form-control" id="partnerLegalName" name="partnerLegalName" required>
            </div>
            <div class="col-md-6">
                <label for="partnerMobile">Partner Mobile</label>
                <input type="tel" class="form-control" id="partnerMobile" name="partnerMobile" required>
            </div>
        </div>
        
        <div class="form-group">
            <label for="partnerAddress">Partner Address</label>
            <textarea class="form-control" id="partnerAddress" name="partnerAddress" rows="3" required></textarea>
        </div>
        
        <div class="form-group row">
            <div class="col-md-6">
                <label for="contractStartDate">Contract Start Date</label>
                <input type="date" class="form-control" id="contractStartDate" name="contractStartDate" required>
            </div>
            <div class="col-md-6">
                <label for="contractExpiryDate">Contract Expiry Date</label>
                <input type="date" class="form-control" id="contractExpiryDate" name="contractExpiryDate" required>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-md-6">
                <label for="minLoanAmount">Minimum Loan Amount</label>
                <input type="number" class="form-control" id="minLoanAmount" name="minLoanAmount" required>
            </div>
            <div class="col-md-6">
                <label for="maxLoanAmount">Maximum Loan Amount</label>
                <input type="number" class="form-control" id="maxLoanAmount" name="maxLoanAmount" required>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-md-6">
                <label for="interestRate">Interest Rate</label>
                <input type="number" step="0.01" class="form-control" id="interestRate" name="interestRate" required>
            </div>
            <div class="col-md-6">
                <label for="depositAmount">Deposit Amount</label>
                <input type="number" class="form-control" id="depositAmount" name="depositAmount" required>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
