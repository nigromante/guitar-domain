<?php
namespace Nigromante\Guitar\Security\Domain\Contracts;

use Nigromante\Guitar\Security\Domain\Entities\UserRoles;
use Nigromante\Guitar\Security\Domain\Entities\UserResources;

interface SecurityRepositoryInterface {

    public function findUserRolesByIdOrFail( string $sessionId ) : UserRoles ;
    public function findUserResourcesByIdOrFail( string $sessionId ) : UserResources ;
    


}