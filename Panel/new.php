<?php

require __DIR__ . '/../autoload.php';

$view = new \App\View();
$view->article = new \App\Models\Article;

echo $view->render(
    __DIR__ . '/EditorTemplate.php'
);