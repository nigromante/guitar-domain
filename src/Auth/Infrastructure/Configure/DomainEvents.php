<?php

namespace Nigromante\Guitar\Auth\Infrastructure\Configure;

use Nigromante\Guitar\Globals\System\EventManager;

use Nigromante\Guitar\Auth\Domain\Events\UserLoginFailEvent;
use Nigromante\Guitar\Auth\Domain\Events\UserLoginSuccessEvent;

use Nigromante\Guitar\Auth\Infrastructure\Listeners\UserLoginFailEventResolveLogger;
use Nigromante\Guitar\Auth\Infrastructure\Listeners\UserLoginFailEventResolveAction;
use Nigromante\Guitar\Auth\Infrastructure\Listeners\UserLoginFailEventResolveNotify;
use Nigromante\Guitar\Auth\Infrastructure\Listeners\UserLoginSuccessEventResolveAction;
use Nigromante\Guitar\Auth\Infrastructure\Listeners\UserLoginSuccessEventResolveNotify;


class DomainEvents
{

    public static function setup()
    {
        EventManager::Listeners(
            [
                UserLoginSuccessEvent::class => [
                    UserLoginSuccessEventResolveAction::class , 
                    UserLoginSuccessEventResolveNotify::class
                ],
                UserLoginFailEvent::class => [
                    UserLoginFailEventResolveAction::class,
                    UserLoginFailEventResolveLogger::class,
                    UserLoginFailEventResolveNotify::class
                ]
            ]
        );
    }
}
