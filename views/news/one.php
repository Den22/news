<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Topic</title>
</head>
<body>
<header>
    <h1>News ticker</h1>
    <div><a href="/">Главная</a></div>
    <div><a href="/Admin/AddView">Добавить новость</a></div>
</header>
<main>
    <?php if (!empty($item)): ?>
        <h2><?php echo $item->title ?></h2>
        <div><?php echo $item->text ?></div>
        <div>Автор: <?php echo $item->author ?></div>
        <div>Время публикации: <?php echo $item->datetime ?></div>
    <?php endif; ?>
</main>
<footer></footer>
</body>
</html>