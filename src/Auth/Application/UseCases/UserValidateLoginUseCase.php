<?php

namespace Nigromante\Guitar\Auth\Application\UseCases;

use Nigromante\Guitar\Auth\Domain\Contracts\AuthRepositoryInterface;
use Nigromante\Guitar\Auth\Domain\ValueObjects\EmailRequired;
use Nigromante\Guitar\Auth\Domain\ValueObjects\Password;
use Nigromante\Guitar\Auth\Infrastructure\Repositories\AuthDatabaseRepository;

class UserValidateLoginUseCase
{
    private AuthRepositoryInterface $repositorio ; 

    public function __construct()
    {
        $this->repositorio = new AuthDatabaseRepository();
    }

    public function execute(UserValidateLoginCommand $command)
    {
        $user = $this->repositorio->findByEmailOrFail( EmailRequired::init( $command->email) ) ;

        return $user->ValidateLogin( Password::create($command->password) );
    }
}
