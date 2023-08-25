<?php

namespace Nigromante\Guitar\Users\Domain\ValueObjects;
use Nigromante\Guitar\Users\Domain\Exceptions\EmailRequiredException ; 


class EmailRequired extends Email
{
    protected function __construct(string $email = '')
    {
        if( empty($email ) )
            throw EmailRequiredException::Send();

        parent::__construct($email) ;
    }
}
