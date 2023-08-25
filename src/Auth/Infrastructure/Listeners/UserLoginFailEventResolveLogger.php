<?php

namespace Nigromante\Guitar\Auth\Infrastructure\Listeners;

use Nigromante\Guitar\Globals\System\FileLog;
use Nigromante\Guitar\Globals\Events\ListenerAbstract;


class UserLoginFailEventResolveLogger extends ListenerAbstract
{

    public function handle()
    {
        $email = $this->event->data();

        FileLog::Error(sprintf("%s :: %s", $this->event::class, $email));
    }
}
