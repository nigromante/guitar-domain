<?php

namespace Nigromante\Guitar\Globals\Events;


class ListenerAbstract implements ListenerInterface
{

    protected $event;

    public function __construct($event)
    {
        $this->event = $event;
    }

    public function handle()
    {
    }
}
