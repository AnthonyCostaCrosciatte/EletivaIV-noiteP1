<<?php
require_once 'cabecalho.php'; 
require_once 'navbar.php';
require_once '../funcoes/produtos.php';

// Função que retorna os dados para o gráfico
$dados = gerarDadosGraficos(); 

// Prepara os dados para o gráfico
$dataArray = [['Produto', 'Estoque Comprado']];
foreach ($dados as $d) {
    $nome = addslashes($d['nome']);
    $estoque = filter_var($d['estoque'], FILTER_VALIDATE_INT); // Garante que o estoque seja um número inteiro

    // Adiciona ao array apenas se o estoque for um número válido e maior que 0
    if ($estoque !== false && $estoque > 0) {
        $dataArray[] = [$nome, $estoque];
    }
}

// Converte o array PHP para JSON para ser usado no Google Charts
$jsonData = json_encode($dataArray);
?>

<main class="container">
    <div class="container mt-5">
        <h2>Dashboard</h2>

        <!-- Div onde o gráfico será renderizado -->
        <div id="chart_div" style="width: 100%; height: 500px;"></div>

        <!-- Tabela de produtos -->
        <h3>Dados de Estoque</h3>
        <table class="table table-striped table-bordered table-hover" id="tabela-estoque">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Estoque Comprado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $d): ?>
                    <tr>
                        <td><?= htmlspecialchars($d['nome']) ?></td>
                        <td><?= htmlspecialchars((int)$d['estoque']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Inclusão da biblioteca Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Cria o gráfico com os dados do PHP convertidos para JSON
            var data = google.visualization.arrayToDataTable(<?= $jsonData ?>);

            // Opções de customização do gráfico
            var options = {
                title: 'Estoque de Produtos Comprados',
                hAxis: { title: 'Produtos', titleTextStyle: { color: '#333' } },
                vAxis: { minValue: 0 },
                chartArea: { width: '70%', height: '70%' },
                colors: ['#28a745'] // Cor verde para as barras
            };

            // Renderiza o gráfico na div com id 'chart_div'
            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</main>

<?php require_once 'rodape.php'; ?>

<style>
    /* Customizando a tabela */
    #tabela-estoque {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    #tabela-estoque th, #tabela-estoque td {
        padding: 12px 15px;
        text-align: left;
    }

    #tabela-estoque th {
        background-color: #dc3545; /* Cor de fundo vermelho para o cabeçalho */
        color: white;  /* Texto branco para contraste */
        font-weight: bold;
    }

    #tabela-estoque tr:nth-child(even) {
        background-color: #f8d7da; /* Cor de fundo vermelha suave para as linhas pares */
    }

    #tabela-estoque tr:hover {
        background-color: #f5c6cb; /* Cor de fundo ao passar o mouse (hover) em vermelho claro */
    }

    #tabela-estoque td {
        border: 1px solid #ddd; /* Bordas finas e suaves */
    }
</style>
