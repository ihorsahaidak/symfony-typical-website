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
    <li><a href="/index/index">Home // index</a></li>
    <li><a href="/index/mine">Home // mine</a></li>
    <li><a href="/about/list">About //list</a></li>
    <li><a href="/rss/news">Rss //news</a></li>
</ul>
<?php
include ('route.php');
include ('Controllers/AboutController.php');
include ('Controllers/HomeController.php');
include ('Controllers/RssController.php');

$route = new Route();

$route->add('/index/index', 'HomeController', 'index');
$route->add('/index/mine', 'HomeController', 'mine');
$route->add('/about/list', 'AboutController', 'list');
$route->add('/rss/news', 'RssController', 'news');

$route->action();
?>
Виконав <a href="https://www.linkedin.com/in/thesagaydak" target="_blank">Сагайдак Ігор</a> для тестового завдання ООО "УкрТех-ИНФО"
<br>
// Час виконання тестового завдання 75 хв
</body>
</html>