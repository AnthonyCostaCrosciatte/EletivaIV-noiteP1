<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Mês Correspondente: </h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mes = $_POST['mes'];
            
            switch ($mes) {
                case 1:
                    echo "<p>O mês correspondente é Janeiro.</p>";
                    break;
                case 2:
                    echo "<p>O mês correspondente é Fevereiro.</p>";
                    break;
                case 3:
                    echo "<p>O mês correspondente é Março.</p>";
                    break;
                case 4:
                    echo "<p>O mês correspondente é Abril.</p>";
                    break;
                case 5:
                    echo "<p>O mês correspondente é Maio.</p>";
                    break;
                case 6:
                    echo "<p>O mês correspondente é Junho.</p>";
                    break;
                case 7:
                    echo "<p>O mês correspondente é Julho.</p>";
                    break;
                case 8:
                    echo "<p>O mês correspondente é Agosto.</p>";
                    break;
                case 9:
                    echo "<p>O mês correspondente é Setembro.</p>";
                    break;
                case 10:
                    echo "<p>O mês correspondente é Outubro.</p>";
                    break;
                case 11:
                    echo "<p>O mês correspondente é Novembro.</p>";
                    break;
                case 12:
                    echo "<p>O mês correspondente é Dezembro.</p>";
                    break;
                default:
                    echo "<p class='text-danger'>Número inválido. Por favor, insira um valor entre 1 e 12.</p>";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>
