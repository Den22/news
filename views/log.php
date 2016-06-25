<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log</title>
</head>
<body>
<table border="1px solid black">
    <tr>
        <th>N</th>
        <th>message</th>
        <th>code</th>
        <th>file</th>
        <th>line</th>
        <th>datetime</th>
    </tr>
    <?php $n = 1;
    foreach ($rows as $row): ?>
        <tr>
            <td><?php echo $n ?></td>
            <?php foreach ($row as $r): ?>
                <td><?php echo $r ?></td>
            <?php endforeach; ?>
        </tr>
        <?php $n++;
    endforeach; ?>
</table>
<div><a href="/news/all">Главная</a></div>
</body>
</html>