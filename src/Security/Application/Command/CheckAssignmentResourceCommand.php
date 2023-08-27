<?php

namespace Nigromante\Guitar\Security\Application\Command;

class CheckAssignmentResourceCommand
{


    public function __construct(public string $userId, public string $resouceId)
    {
    }
}
