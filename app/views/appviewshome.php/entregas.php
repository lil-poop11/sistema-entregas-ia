<!DOCTYPE html>
<html>
<head>
    <title>Entregas</title>
</head>
<body>

<h2>Nova Entrega</h2>

<form method="POST" action="index.php?rota=salvar">
    Origem: <input type="text" name="origem"><br>
    Destino: <input type="text" name="destino"><br>
    <button type="submit">Salvar</button>
</form>

<h2>Lista</h2>

<?php foreach ($entregas as $e): ?>
    <p><?= $e['origem'] ?> → <?= $e['destino'] ?></p>
<?php endforeach; ?>

</body>
</html>
