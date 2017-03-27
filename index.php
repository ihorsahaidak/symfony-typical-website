<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Routing in PHP</title>
</head>
<body>

<h1>Simple Routing in PHP</h1>
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/rss">Rss</a></li>
</ul>
<?php
include ('route.php');
include ('Controllers/AboutController.php');
include ('Controllers/HomeController.php');
include ('Controllers/RssController.php');

$route = new Route();

$route->add('/', 'HomeController');
$route->add('/about', 'AboutController');
$route->add('/rss', 'RssController');

$route->action();
?>
Виконав <a href="https://www.linkedin.com/in/thesagaydak" target="_blank">Сагайдак Ігор</a> для тестового завдання ООО "УкрТех-ИНФО"
<br>
// Час виконання тестового завдання 75 хв
</body>
</html>