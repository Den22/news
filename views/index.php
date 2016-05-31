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
        <?php foreach ($newsInfo as $new): ?>
            <tr>
                <td><?php echo $new->author ?></td>
                <td><a href="<?php echo '/topic.php?topic_id=' . $new->id ?>"><?php echo $new->title ?></a></td>
                <td><?php echo $new->datetime ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>
<footer></footer>
</body>
</html>