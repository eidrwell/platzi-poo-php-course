<?php

include __DIR__ . "/vendor/autoload.php";

use Blog\Author;
use Blog\Category;
use Blog\Post;

// Primero creo las categorías

// Categoría PHP
$phpCategory = new Category();
$phpCategory->setNameCategory("PHP");

// Categoría VueJS
$vueCategory = new Category();
$vueCategory->setNameCategory("VueJS");

// Ahora creo al autor
$autorrr = new Author();
$autorrr->setNameAuthor("NAME");

// Ahora creo un post sobre PHP
$un_post = new Post();
$un_post->setData("TITULO","LOREM IPSUM","NAME",$phpCategory);

// Ahora creo un post sobre VueJS
$dos_post = new Post();
$dos_post->setData("TITULO2","LOREM IPSUM*2","NAME",$vueCategory);

// Ahora le asigno los posts al autor
$autorrr->createPost($un_post);
$autorrr->createPost($dos_post);

// Y por último listamos los posts
$author_post = $autorrr->getAllPost();

foreach ($author_post as $post) {
    
    echo "El usuario {$autorrr->getNameAuthor()} tiene el siguiente post: <br><br>";
    echo $post->getPost();
    echo "<br><br><br>";

}

?>