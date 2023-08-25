<?php

namespace Nigromante\Guitar\Auth\Infrastructure\Listeners;

use Nigromante\Guitar\Globals\Events\ListenerAbstract;

class UserLoginSuccessEventResolveNotify extends ListenerAbstract
{

    public function handle()
    {

        $email = $this->event->data();

        mail($email, "Login Success", "se ha logueado");
    }
}
