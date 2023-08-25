<?php

namespace Nigromante\Guitar\Users\Application\UseCases;

use Nigromante\Guitar\Users\Domain\Contracts\UserPreferencesRepositoryInterface;
use Nigromante\Guitar\Users\Infrastructure\Repositories\UserPreferencesDatabaseRepository;
use Nigromante\Guitar\Users\Domain\ValueObjects\EmailRequired;

class UserPreferencesUseCase
{

    private UserPreferencesRepositoryInterface $repositorio;
    
    public function __construct()
    {
        $this->repositorio = new UserPreferencesDatabaseRepository();
    }

    public function execute($email)
    {
        return $this->repositorio->findByEmailOrFail(EmailRequired::init($email));
    }
}
