<?php

namespace app\interactor\Task;

use app\entity as Entity;
use app\repository as Repo;
use app\service as Service;

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

    public function __construct(Repo\TaskInterface $taskRepo, Repo\UserInterface $userRepo, Service\SessionInterface $session)
    {
        $this->taskRepo = $taskRepo;
        $this->userRepo = $userRepo;
        $this->session = $session;
    }

    public function execute($data = [])
    {
        $data['userId'] = $this->session->getLoggedInUserId();
        $this->taskRepo->create($data);

        return true;
    }
}
