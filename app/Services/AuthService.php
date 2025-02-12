<?php

namespace App\Services;

use App\Contracts\ModelDTO;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthService extends CoreService
{
	/**
	 * @param UserRepository $repository
	 */
	public function __construct(UserRepository $repository)
	{
		parent::__construct($repository);
	}

	/**
	 * @param ModelDTO $dto
	 *
	 * @return Model
	 */
	public function firstOrCreate(ModelDTO $dto): Model
	{
		$dto = $dto->toArray();

		return $this->repository->firstOrCreate($dto);
	}

	/**
	 * @param Request $request
	 *
	 * @return void
	 */
	public function regenerateSession(Request $request): void
	{
		$request->session()->regenerate();
	}

	/**
	 * @param User $user
	 *
	 * @return void
	 */
	public function authLogin(Model $user): void
	{
		Auth::login($user);
	}
}
