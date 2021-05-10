<?php


class Shape
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show() : string {
        return "I'm a shape, my name is $this->name";
    }
}