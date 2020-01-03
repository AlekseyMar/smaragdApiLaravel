<?php

	namespace App\Http\Controllers;

	use App\BigUser;
	use App\Http\Requests\BigUserRequest;

	class BigUserController extends ApiControllers
	{
		public function __construct(BigUser $model) //, BigUserRequest $request
		{
			$this->model = $model;
			//$this->request = $request;
		}

		public function createBigUser(BigUserRequest $request) {
			return $this->create($request);
		}

		public function updateBigUser(int $entityId, BigUserRequest $request) {
			return patern::update($entityId, $request);
		}
	}