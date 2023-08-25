<?php

namespace Nigromante\Guitar\Globals\Events;

interface ListenerInterface
{

    public function __construct($event);

    public function handle();
}
