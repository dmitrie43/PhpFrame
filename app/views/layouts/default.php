<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $this->getMeta(); ?>
</head>
<body>
<h2><?= $name ?></h2>
<h1>Шаблон Default</h1>
<h2><?= $content; ?></h2>
<?php
//Для обзора всех sql операций
$logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();

debug($logs->grep('SELECT'));
?>
</body>
</html>