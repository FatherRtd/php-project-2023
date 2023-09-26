<?php

namespace Framework;

class Router
{
    private Request $request;
    public function __construct(Request $request)
    {
        $this->request = $request;

    }

    public function getContent(): array
    {
        return $this->request->getGetParams();
    }
}