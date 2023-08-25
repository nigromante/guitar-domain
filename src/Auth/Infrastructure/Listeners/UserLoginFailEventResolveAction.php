<?php

namespace Nigromante\Guitar\Auth\Infrastructure\Listeners;

use Nigromante\Guitar\Auth\Application\UseCases\UserLoginFailUseCase;
use Nigromante\Guitar\Globals\Events\ListenerAbstract;


class UserLoginFailEventResolveAction extends ListenerAbstract
{

    public function handle()
    {

        $email = $this->event->data();

        (new UserLoginFailUseCase())->execute($email);
    }
}
