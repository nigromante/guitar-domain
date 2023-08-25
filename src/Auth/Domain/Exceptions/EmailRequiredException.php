<?php
namespace Nigromante\Guitar\Auth\Domain\Exceptions;


class EmailRequiredException extends \Exception
{
    public const EMAIL_REQUIRED = 'Email Required';

    public static function Send()
    {
        return new self( self::EMAIL_REQUIRED );
    }

}
