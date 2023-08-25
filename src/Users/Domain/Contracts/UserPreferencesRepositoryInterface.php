<?php
namespace Nigromante\Guitar\Users\Domain\Contracts;


use Nigromante\Guitar\Users\Domain\Entities\User;
use Nigromante\Guitar\Users\Domain\ValueObjects\EmailRequired;

interface UserPreferencesRepositoryInterface {

    public function findByEmailOrFail( EmailRequired $email) :User ;


}