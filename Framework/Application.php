<?php

namespace Framework;


class Application
{

    private Router $router;


    public function __construct(Router $router)
    {
        $this->router = $router;
    }


    public function run(): void
    {
        echo ('Текущий маршрут<br>');
        echo print_r($this->router->getContent(), true);
    }
}