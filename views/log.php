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
            <td><?php echo $row['0'] ?></td>
            <td><?php echo $row['1'] ?></td>
            <td><?php echo $row['2'] ?></td>
            <td><?php echo $row['3'] ?></td>
            <td><?php echo $row['4'] ?></td>
        </tr>
        <?php $n++;
    endforeach; ?>
</table>
<div><a href="/">Главная</a></div>
</body>
</html>