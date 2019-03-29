<?php

namespace MyProject\Features;

/**
 * Allows object properties to be accessed as-if arrays
 */
trait ArrayObjectTrait
{
    public function offsetExists($offset): bool
    {
        return property_exists($this, $offset);
    }

    public function offsetGet($offset)
    {
        return property_exists($this, $offset) ? $this->$offset : null;
    }

    public function offsetSet($offset, $value): void
    {
        if (property_exists($this, $offset)) {
            $this->$offset = $value;
        }
    }

    public function offsetUnset($offset): void
    {
        if (property_exists($this, $offset)) {
            $this->$offset = null;
        }
    }
}
