<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Topic</title>
</head>
<body>
<header>
    <h1>News ticker</h1>
    <div><a href="/index.php">Главная</a></div>
    <div><a href="/views/add.php">Добавить новость</a></div>
</header>
<main>
    <h2><?php echo $topic['title'] ?></h2>
    <div><?php echo $topic['text'] ?></div>
    <div>Автор: <?php echo $topic['author'] ?></div>
    <div>Время публикации: <?php echo $topic['datetime'] ?></div>
</main>
<footer></footer>
</body>
</html>