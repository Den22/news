<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>New topic</title>
</head>
<body>
<header>
    <h1>News ticker</h1>
    <div><a href="/news/all">Главная</a></div>
</header>
<main>
    <form action="/admin/addNews" method="post">
        <table>
            <tr>
                <td><input type="text" name="title" id="title"></td>
                <td><label for="title">Заголовок</label><br></td>
            </tr>
            <tr>
                <td><textarea name="text" id="text"></textarea></td>
                <td><label for="text">Текст</label><br></td>
            </tr>
            <tr>
                <td><input type="text" name="author" id="author"></td>
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
