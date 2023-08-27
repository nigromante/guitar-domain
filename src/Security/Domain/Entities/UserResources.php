<?php
declare(strict_types=1);

namespace Nigromante\Guitar\Security\Domain\Entities;
use Nigromante\Guitar\Security\Domain\Exceptions\UserResourceException;

final class UserResources
{
    private $userId;
    private $nombre ;
    private $resources ; 

    
    public function __construct( $userId, $nombre, $resources )
    {
        $this->userId = $userId;
        $this->nombre = $nombre;
        $this->resources = $resources;
    }

    public function hasResource( $resourceId ) {

        if( ! in_array( $resourceId , $this->resources ) ) {
            throw UserResourceException::Send( $this->userId , $this->nombre , $resourceId );
        }
    }

    public function resources() {
        return $this->resources ; 
    }

}