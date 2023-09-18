<?php

namespace Blog;

class Category
{
	protected $name;

	public function setNameCategory($name)
	{
		$this->name = $name;
	}

	public function getNameCategory(){
		return $this->name;
	}
}