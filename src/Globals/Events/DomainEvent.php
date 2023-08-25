<?php
namespace Nigromante\Guitar\Globals\Events;

abstract class DomainEvent
{
    public function __construct(private $data)
    {
    }

    public function data()
    {
        return $this->data;
    }
}
