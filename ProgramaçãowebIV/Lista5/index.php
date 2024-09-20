<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 5</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="my-4">Lista 5 - Exercícios</h1>
    <div class="list-group">
        <?php
        $files = scandir('.');
        foreach($files as $file) {
            if (strpos($file, '.php') !== false && $file != 'index.php') {
                echo '<a href="' . $file . '" class="list-group-item list-group-item-action">' . ucfirst(str_replace('.php', '', $file)) . '</a>';
            }
        }
        ?>
    </div>
</div>