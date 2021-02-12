<?php

abstract class Model
{
    /** @var string */
    protected $code;

    public function getCode()
    {
        return $this->code;
    }

    public function setCode(string $code): string
    {
        return $this->code = $code;
    }
}
