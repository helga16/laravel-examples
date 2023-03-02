<?php

namespace Kaplunova\Meta;

class MetaService
{
    protected $property = 'test_property';
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getAllValues()
    {
        return $this->property . '--' . $this->value;
    }

}
