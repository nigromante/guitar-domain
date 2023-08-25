<?php
declare(strict_types=1);

namespace Nigromante\Guitar\Auth\Domain\Entities;
use Nigromante\Guitar\Auth\Domain\Events\UserBlockedTryToLoginEvent;
use Nigromante\Guitar\Auth\Domain\Events\UserLoginSuccessEvent;
use Nigromante\Guitar\Auth\Domain\Events\UserLoginFailEvent;
use Nigromante\Guitar\Auth\Domain\Exceptions\UserBlockedException;
use Nigromante\Guitar\Auth\Domain\Exceptions\UserInvalidPasswordException;
use Nigromante\Guitar\Auth\Domain\ValueObjects\EmailRequired; 
use Nigromante\Guitar\Auth\Domain\ValueObjects\Password;
use Nigromante\Guitar\Globals\System\EventManager;

final class User
{
    private EmailRequired $email;
    private Password $password;
    private $estado ; 

    public function __construct(EmailRequired $email, Password $password, $estado)
    {
        $this->email = $email;
        $this->password = $password;
        $this->estado = $estado;

        if( $this->estado == 0 ) { 
            EventManager::dispatch( new UserBlockedTryToLoginEvent( $this->email->value() ) ) ;
            throw UserBlockedException::Send( $this->email->value() ) ;
        }
    }

    public function ValidateLogin(Password $password )
    {
        if( $this->password->equalTo($password) ) {

            EventManager::dispatch( new UserLoginSuccessEvent( $this->email->value() ) ) ;

            return true ;
        }

        EventManager::dispatch( new UserLoginFailEvent( $this->email->value() ) ) ;

        throw UserInvalidPasswordException::Send( $this->email->value() ) ; 
    }

    public function getEmail() {
        return $this->email ; 
    }

    
}
