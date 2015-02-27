<?php

namespace app\interactor\Task;

use app\entity as Entity;
use app\repository as Repo;
use app\service as Service;
use app\request as Request;
use app\response as Response;
use app\validator as Validator;

/**
 * Task Creation Interactor
 */
class Creation
{
    /**
     *
     * @var Repo\TaskInterface 
     */
    protected $taskRepo;

    /**
     *
     * @var Repo\UserInterface
     */
    protected $userRepo;

    /**
     *
     * @var Service\SessionInterface
     */
    protected $session;

    public function __construct(
        Repo\TaskInterface $taskRepo,
        Repo\UserInterface $userRepo,
        Service\SessionInterface $session
    ) {
        $this->taskRepo = $taskRepo;
        $this->userRepo = $userRepo;
        $this->session = $session;
    }

    public function execute(Request\Task\Creation $request, Response\Task\Creation $response)
    {
        $userId = $this->session->getLoggedInUserId();

        $validator = new Validator\Task\Creation($request);
        
        if ($validator->isValid()) {
            try {
                $task = $this->taskRepo->create(
                    null,
                    $userId,
                    $request->getTitle(),
                    $request->getDescription(),
                    $request->getNotes()
                );

                $this->taskRepo->add($task);

                $response->setStatusOk();
            } catch (Exception $e) {
                $response->setErrors($e->getErrors());
                $response->setStatusError();
            }            
        } else {
            $response->setErrors($validator->getErrors());
            $response->setStatusInvalid();
        }        
    }
}
