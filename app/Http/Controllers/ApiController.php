<?php
	namespace App\Http\Controllers;
	abstract class ApiControllers
	{
		protected $model;
		public function get() {
            $limit = (int) $request->get('limit', 100);
            $offset = (int) $request->get('offset', 0);
            $result = $this->model->limit($limit)->offset($offset)->get();
            return $this->sendResponse($result, 'OK',200);
        }
		public function detail(string $objectName = null) {} // метод получения конкретной записи по id
		public function update(int $objectId) {}
		public function delete(int $objectId) {}
		public function create() {}
	}