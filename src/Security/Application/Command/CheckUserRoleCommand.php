<?php

namespace Nigromante\Guitar\Security\Application\Command;

class CheckUserRoleCommand
{


    public function __construct(public string $userId, public string $role)
    {
    }
}
