<?php

namespace Nigromante\Guitar\Security\Application\UseCases;

class CheckUserRoleCommand
{


    public function __construct(public string $userId, public string $role)
    {
    }
}
