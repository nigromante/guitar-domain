<?php
namespace Nigromante\Guitar\Auth\Domain\Contracts;

use Nigromante\Guitar\Auth\Domain\Entities\User;
use Nigromante\Guitar\Auth\Domain\ValueObjects\EmailRequired;

interface AuthRepositoryInterface {

    public function findByEmailOrFail( EmailRequired $email) :User ;

    public function userSuccessLogin( User $user );

    public function userErrorLogin( User $user );

}