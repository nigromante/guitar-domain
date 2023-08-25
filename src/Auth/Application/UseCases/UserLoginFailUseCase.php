<?php

namespace Nigromante\Guitar\Auth\Application\UseCases;

use Nigromante\Guitar\Auth\Domain\Contracts\AuthRepositoryInterface;
use Nigromante\Guitar\Auth\Domain\ValueObjects\EmailRequired;
use Nigromante\Guitar\Auth\Infrastructure\Repositories\AuthDatabaseRepository;

class UserLoginFailUseCase
{

    private AuthRepositoryInterface $repositorio ; 

    public function __construct()
    {
        $this->repositorio = new AuthDatabaseRepository();
    }

    public function execute($email)
    {
        $user = $this->repositorio->findByEmailOrFail( EmailRequired::init( $email ) ) ;

        $this->repositorio->userErrorLogin( $user ) ;
    }
}
