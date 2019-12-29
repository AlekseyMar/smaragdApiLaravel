<?php
	namespace App\Http\Controllers;
	abstract class ApiControllers
	{
		protected $model;
		public function get() {}
		public function detail(string $objectName = null) {} // метод получения конкретной записи по id
		public function update(int $objectId) {}
		public function delete(int $objectId) {}
		public function create() {}
	}