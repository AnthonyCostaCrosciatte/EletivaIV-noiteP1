<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try
            {
                $valor = (int) $_POST['valor'] ?? 0;
                switch($valor)
                {
                    case 10:
                        echo "nota A";
                        break;
                    case 9:
                        echo "nota B";
                        break;
                    case 8:
                        echo "nota C";
                        break;
                    case 7:
                        echo "nota D";
                        break;
                    default:
                        echo "nota E";       
                }
                $dado = 1;
                $dado = ($dado >= 1) ? "sim" : "Não";
                if ($dado >= 1)
                    $dado = "sim";
                else
                    $dado = "Não";
                $i = 1;
                while ($i<=5)
                {
                    echo "$i \n";
                    $i++;
                }
                $i=0;
                do
                {
                    echo "$i \n";
                    $i++;
                }
                while ($i <= 5);
                for ($i = 0; $i<=5, $i++)
                {
                    echo "$i \n";
                }

            } 
            catch(Exception $e) {
                echo "Erro: " .$e->getMessage();
            }
        }
    ?>
</body>
</html>