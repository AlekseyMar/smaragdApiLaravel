<?php
	namespace App\Http\Controllers;
	class UserController extends ApiControllers
	{
		public function __construct(UserModel $model)
		{
			$this->model = $model;
		}
	}