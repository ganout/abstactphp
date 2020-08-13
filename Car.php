<?php


class Car extends Vehicle
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}