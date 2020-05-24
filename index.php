<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Thực hành] Đếm số lượng đối tượng của một lớp</title>
</head>
<body>
<?php
include "Class/Application.php";

echo "Total objects count: " . Application::$count . "<br/>";
$app1 = new Application('App One');
echo "Total objects count: " . Application::$count . "<br/>";
$app2 = new Application('App Two');
echo "Total objects count: " . Application::$count . "<br/>";
echo $app1 . '<br/>';
echo $app2 . '<br/>';
?>
</body>
</html>
