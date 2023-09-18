<?php 

use PHPUnit\Framework\TestCase;
use Blog\User;
use Blog\Author;
use Blog\Category;
use Blog\Post;

class BlogTest extends TestCase
{
    public function test_post()
    {
        // Creamos un usuario
        $author = new Author();
        // Crear categoría
        $category = new Category;
        $category->setNameCategory("PHP");
        // Crear post
        $post = new Post;
        $post->setData("Título", "Contenido", "Autor", $category);
        // Agregar post al autor
        $author->createPost($post);

        // Aserción o afirmación para comprobar que tenemos 1 post agregado
        $this->assertEquals(1, $author->countPosts());
        // Aserción o afirmación para comprobar que la categoría es una instancia de la clase Category
        $this->assertInstanceOf(Category::class, $post->getPostCategory()[0]);
    }
}