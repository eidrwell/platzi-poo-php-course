<?php

namespace Blog;

class User
{
	protected $name;
	protected $nickname;
	protected $email; 
	protected $id;

	public function setData(string $name, string $nickname, string $email)
	{
		$this->name = $name;
		$this->nickname = $nickname;
		$this->email = $email;
		$this->id = rand(1, 100);
	}

	public function getAllData()
	{
		return "Name: ".this->name." Nickname: ".this->nickname." ID: ".this->id;
	}

}