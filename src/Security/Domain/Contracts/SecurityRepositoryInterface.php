<?php
namespace Nigromante\Guitar\Security\Domain\Contracts;

use Nigromante\Guitar\Security\Domain\Entities\UserRoles;

interface SecurityRepositoryInterface {

    public function findByIdOrFail( string $sessionId ) : UserRoles ;


}