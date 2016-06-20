<?php
switch ($errorCode) {
    case 404:
        header("HTTP/1.1 404 Not Found");
        break;
    case 403:
        header("HTTP/1.1 403 Forbidden");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error <?php echo $errorCode ?></title>
</head>
<body>
<h1>Error <?php echo $errorCode ?></h1>
<div><?php echo $errorMessage ?></div>
<div><a href="/">Главная</a></div>
</body>
</html>