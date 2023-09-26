<?php

namespace Framework;

class Request
{
    private array $get_params;
    public function __construct()
    {
        $this->get_params = $_GET;

    }

    public function getGetParams(): array
    {
        return $this->get_params;
    }

}