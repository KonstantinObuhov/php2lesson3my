<?php

require __DIR__ . '/../autoload.php';

$view = new \App\View();
$view->news = \App\Models\Article::findAll();

echo $view->render(
    __DIR__ . '/NewsTemplatePanel.php'
);

/*При вызове метода незнакомого класса запускается функция __autoload
из файла autoload.php и делает require нужного нам класса
*/
//$data = \App\Models\Author::findAll();
//$data = \App\Models\Article::findAll();
//$data = new \App\Models\Article;
//$data = new \App\Models\Author;
//echo '<pre>';
//$data = \App\Models\Article::findById(1);