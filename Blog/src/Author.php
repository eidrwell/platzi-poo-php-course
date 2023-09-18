<?php 

namespace Blog;

class Author extends User
{
	protected $name;
	protected $createdPosts;
	protected $posts = [];

	public function setNameAuthor($name)
	{
		$this->name = $name;
	}

	public function getNameAuthor()
	{
		return $this->name;
	}

	public function createPost(Post $post)
	{
		$this->posts[] = $post;
	}

	public function countPosts()
	{
		return count($this->posts);
	}

	public function getAllPost()
	{
		return $this->posts;
	}
}