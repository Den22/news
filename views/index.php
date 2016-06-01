<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<header>
    <h1>News ticker</h1>
    <div><a href="/views/add.php">Добавить новость</a></div>
</header>
<main>
    <table>
        <tr>
            <th>Автор</th>
            <th>Заголовок</th>
            <th>Дата и время</th>
        </tr>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?php echo $item->author ?></td>
                <td><a href="<?php echo '/topic.php?id=' . $item->id ?>"><?php echo $item->title ?></a></td>
                <td><?php echo $item->datetime ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>
<footer></footer>
</body>
</html>