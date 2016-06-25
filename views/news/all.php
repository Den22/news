<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<header>
    <h1>News ticker</h1>
</header>
<main>
    <table>
        <tr>
            <th>Автор</th>
            <th>Заголовок</th>
            <th>Дата и время</th>
        </tr>
        <?php
        if (!empty($items)):
            foreach ($items as $item):
                ?>
                <tr>
                    <td><?php echo $item->author ?></td>
                    <td><a href="<?php echo '/news/one/' . $item->id ?>"><?php echo $item->title ?></a></td>
                    <td><?php echo $item->datetime ?></td>
                    <td><a href="<?php echo '/show/updateForm/' . $item->id ?>">Изменить</a></td>
                    <td><a href="<?php echo '/admin/deleteNews/' . $item->id ?>">Удалить</a></td>
                </tr>
                <?php
            endforeach;
        endif;
        ?>
    </table>
    <div><a href="/show/addForm">Добавить новость</a></div>
    <div>
        <h3>Админ-панель</h3>
        <a href="/show/logs">Просмотр логов</a>
    </div>
</main>
<footer></footer>
</body>
</html>