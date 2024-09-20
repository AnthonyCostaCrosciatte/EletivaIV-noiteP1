<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsde"
 </head>
 <body>
    <?php
        declare(strict_types=1);
    
        function soma(int $a, int $b): int{
            return $a + b;
        }

        function subtracao(int $a, int $b): void {
            echo "<p>subtração: ".($a - b)." </p>";
        }

        function saudacao(string $nome = "Visitante") : void{
            echo "<p>Olá $nome! </p>";
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $valor1 = $_POST['valor1'] ?? 0;
                $valor2 = $_POST['valor2'] ?? 0;
                $soma = soma($valor1, $valor2);
                echo "<p> Soma: $soma </p>";
                subtracao($valor1, $valor2);

            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }
    ?>
 </body>
 </html>