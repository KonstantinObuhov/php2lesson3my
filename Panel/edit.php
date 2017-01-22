<?php

require __DIR__ . '/../autoload.php';

$view = new \App\View();

if (isset($_GET['id'])) {
    $view->article = \App\Models\Article::findById($_GET['id']);
}

echo $view->render(
    __DIR__ . '/EditorTemplate.php'
);