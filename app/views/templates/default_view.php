<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../app/styles/index.css">
    <title>Document</title>
</head>
<body>
<header>
    <h1>
        Site name
    </h1>
</header>
<nav>
    <ul>
        <li><a href="<?= \core\Route::getUrl('task', 'index')?>">Tasks</a></li>
    </ul>
</nav>
<main>
    <?php
    include_once 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $pageView;
    ?>
</main>
<footer>
    VovchenkoMykyta &copy;
</footer>
</body>
</html>