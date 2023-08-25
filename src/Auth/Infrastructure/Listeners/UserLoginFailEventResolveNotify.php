<?php

namespace Nigromante\Guitar\Auth\Infrastructure\Listeners;

use Nigromante\Guitar\Globals\Events\ListenerAbstract;

class UserLoginFailEventResolveNotify extends ListenerAbstract
{

    public function handle()
    {

        $email = $this->event->data();

        mail($email, "Login Fail", "usuario bloqueado");
    }
}
