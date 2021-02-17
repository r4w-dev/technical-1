<?php

declare(strict_types=1);

/**
 * I chose to implement a trait mainly becuase they are convenient and they solve the problem of single inheritance.
 * They also allow for simpler and cleaner code with less duplication.
 */
trait MagicGetterSetterTrait
{
    public function __get($name)
    {
        $method = 'get' . ucfirst($name);
        if (!method_exists($this, $method)) {
            throw new \RuntimeException(sprintf('Undefined property: %s:%s', __CLASS__, $name));
        }
        return $this->{$method}();
    }

    public function __set($name, $value)
    {
        $method = 'set' . ucfirst($name);
        if (!method_exists($this, $method)) {
            throw new \RuntimeException(sprintf('Undefined property: %s:%s', __CLASS__, $name));
        }
        return $this->{$method}($value);
    }
}
