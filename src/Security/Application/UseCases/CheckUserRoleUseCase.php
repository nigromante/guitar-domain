<?php

namespace Nigromante\Guitar\Security\Application\UseCases;

use Nigromante\Guitar\Security\Domain\Contracts\SecurityRepositoryInterface;
use Nigromante\Guitar\Security\Infrastructure\Repositories\SecurityRepository;

class CheckUserRoleUseCase
{

    private SecurityRepositoryInterface $repositorio;

    public function __construct()
    {
        $this->repositorio = new SecurityRepository();
    }

    public function execute($userId, $role) 
    {
        $userRoles = $this->repositorio->findByIdOrFail($userId);
        return $userRoles->hasRole( $role );
    }
}
