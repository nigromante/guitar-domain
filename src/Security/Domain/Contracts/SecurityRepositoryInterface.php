<?php
namespace Nigromante\Guitar\Security\Domain\Contracts;

use Nigromante\Guitar\Security\Domain\Entities\UserRoles;

interface SecurityRepositoryInterface {

    public function findUserRolesByIdOrFail( string $sessionId ) : UserRoles ;


}