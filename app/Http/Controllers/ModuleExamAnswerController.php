<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\ModuleExamAnswerDTO;
use App\Http\Requests\ModuleExamAnswerRequest;
use App\Models\ModuleExamAnswer;
use App\Services\ModuleExamAnswerService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

class ModuleExamAnswerController extends Controller
{
    use AuthorizesRequests;
    /**
     * @param ModuleExamAnswerService $service
     */
    public function __construct(
        protected ModuleExamAnswerService $service,
    )
    {}

    /**
     * @param ModuleExamAnswerRequest $request
     *
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function store(ModuleExamAnswerRequest $request): RedirectResponse
    {
        $this->authorize('create', ModuleExamAnswer::class);

        $this->service->create(ModuleExamAnswerDTO::appRequest($request));

        return back();
    }

    /**
     * @param string $id
     *
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function destroy(string $id): RedirectResponse
    {
        $model = $this->service->findById($id);

        $this->authorize('delete', $model);

        $this->service->destroyById($id);

        return back();
    }

    /**
     * @param ModuleExamAnswerRequest $request
     * @param string $id
     *
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function update(ModuleExamAnswerRequest $request, string $id): RedirectResponse
    {
        $moduleExamAnswer = $this->service->findById($id);

        $this->authorize('update', $moduleExamAnswer);

        $entity = $this->service->findById($id);

        $this->service->update(
            $entity,
            ModuleExamAnswerDTO::appRequest($request)
        );

        return back();
    }
}
