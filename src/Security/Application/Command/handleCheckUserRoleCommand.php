<?php

namespace Nigromante\Guitar\Security\Application\Command;

use Nigromante\Guitar\Security\Domain\Contracts\SecurityRepositoryInterface;
use Nigromante\Guitar\Security\Infrastructure\Repositories\SecurityRepository;

class handleCheckUserRoleCommand
{

    private SecurityRepositoryInterface $repositorio;

    public function __construct()
    {
        $this->repositorio = new SecurityRepository();
    }

    public function handle(CheckUserRoleCommand $command)
    {
        $userRoles = $this->repositorio->findUserRolesByIdOrFail($command->userId);
        return $userRoles->hasRole($command->role);
    }
}
