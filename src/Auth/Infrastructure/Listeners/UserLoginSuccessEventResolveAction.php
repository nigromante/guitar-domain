<?php

namespace Nigromante\Guitar\Auth\Infrastructure\Listeners;

use Nigromante\Guitar\Auth\Application\UseCases\UserLoginSuccessUseCase;
use Nigromante\Guitar\Globals\Events\ListenerAbstract;

class UserLoginSuccessEventResolveAction extends ListenerAbstract
{

    public function handle()
    {

        $email = $this->event->data();

        (new UserLoginSuccessUseCase())->execute($email);
    }
}
