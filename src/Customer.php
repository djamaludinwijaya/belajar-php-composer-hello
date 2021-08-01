<?php

namespace ProgrammerZamanNow\Belajar;

Class Customer{

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name) : string
    {
        return "Hello $name, My name $this->name";
    }
}