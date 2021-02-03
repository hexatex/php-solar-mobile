<?php

trait IsAstroObject
{
    /** @var string */
    protected $code;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code)
    {
        $this->code = $code;
    }
}
