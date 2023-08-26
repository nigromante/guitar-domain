<?php

namespace Nigromante\Guitar\Security\Application\UseCases;

use Nigromante\Guitar\Security\Domain\Contracts\SecurityRepositoryInterface;
use Nigromante\Guitar\Security\Infrastructure\Repositories\SecurityRepository;

class CheckUserRoleCommandHandler
{

    private SecurityRepositoryInterface $repositorio;

    public function __construct()
    {
        $this->repositorio = new SecurityRepository();
    }

    public function handle( CheckUserRoleCommand $command ) 
    {
        $userRoles = $this->repositorio->findByIdOrFail( $command->userId);
        return $userRoles->hasRole( $command->role );
    }
}
