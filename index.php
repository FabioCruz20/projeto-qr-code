<?php 
    $nome = empty($_REQUEST['nome']) ? '' : $_REQUEST['nome'];
    $situacao = empty($_REQUEST['status']) ? '' : $_REQUEST['status'];

    $cssSituacao = array(
        'positivo' => 'card-positivo',
        'negativo' => 'card-negativo',
        '' => ''
    );
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="card <?= $cssSituacao[$situacao] ?>">
            <div class="card-header">
                <h3>Informações</h3>
            </div>
            <div class="card-body">
                <div class="row">Nome: <?= $nome ?></div>
                <div class="row">Situação: <?= $situacao ?> </div>
            </div>
        </div>
    </div>
</body>
</html>