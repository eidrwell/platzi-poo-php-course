<?php

namespace Blog;

class Post
{
	protected $title;
	protected $content;
	protected $author;
	protected $category = [];

	public function setData(string $title, string $content, string $author, Category $category)
	{
		$this->title = $title;	
		$this->content = $content;
		$this->author = $author;
		array_push($this->category, $category);
	}
	
	public function getPost()
	{
		return " Titulo ".$this->title." Autor: ".$this->author." Contenido: ".$this->content;
	}

	public function getPostCategory()
	{
		return $this->category;
	}
}
	