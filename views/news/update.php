<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>New topic</title>
</head>
<body>
<header>
    <h1>News ticker</h1>
    <div><a href="/">Главная</a></div>
</header>
<main>
    <form action="<?php echo '/Admin/UpdateNews/' . $item->id ?>" method="post">
        <table>
            <tr>
                <td><input type="text" name="title" id="title" value="<?php echo $item->title ?>"></td>
                <td><label for="title">Заголовок</label><br></td>
            </tr>
            <tr>
                <td><textarea name="text" id="text" placeholder="<?php echo $item->text ?>"></textarea></td>
                <td><label for="text">Текст</label><br></td>
            </tr>
            <tr>
                <td><input type="text" name="author" id="author" value="<?php echo $item->author ?>"></td>
                <td><label for="author">Автор</label><br></td>
            </tr>
            <tr>
                <td>
                    <button>Отправить</button>
                </td>
                <td><input type="reset" value="Сброс"><br></td>
            </tr>
        </table>
    </form>
</main>
<footer></footer>
</body>
</html>
