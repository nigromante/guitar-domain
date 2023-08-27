<?php

namespace Nigromante\Guitar\Security\Application\Command;

use Nigromante\Guitar\Security\Domain\Contracts\SecurityRepositoryInterface;
use Nigromante\Guitar\Security\Infrastructure\Repositories\SecurityRepository;

class handleCheckAssignmentResourceCommand
{

    private SecurityRepositoryInterface $repositorio;

    public function __construct()
    {
        $this->repositorio = new SecurityRepository();
    }

    public function handle(CheckAssignmentResourceCommand $command)
    {
        $userRoles = $this->repositorio->findUserResourcesByIdOrFail($command->userId);
        return $userRoles->hasResource($command->resouceId);
    }
}
