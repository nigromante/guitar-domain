<?php

namespace Nigromante\Guitar\Auth\Domain\Exceptions;


class UserInvalidPasswordException extends \Exception
{
    private const USER_INVALID_PASSWORD = 'Invalid password [%s]';

    public static function Send( $email )
    {
        return new self(sprintf(self::USER_INVALID_PASSWORD, $email));
    }

}
