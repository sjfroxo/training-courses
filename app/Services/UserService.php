<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserService extends CoreService
{
	/**
	 * @param UserRepository $repository
	 */
	public function __construct(UserRepository $repository)
	{
		parent::__construct($repository);
	}

	/**
	 * @param string $userId
	 *
	 * @return Collection
	 */
	public function showChats(string $userId): Collection
	{
		return $this->repository->getChats($userId);
	}

	/**
	 * @param string $id
	 *
	 * @return Model
	 */
	public function getUserProfile(string $id): Model
	{
		$user = $this->repository->findById($id);
		$user->user_role = $this->repository->getUserRole($user);

		return $user;
	}
}
