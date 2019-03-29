<?php

namespace MyProject\Theme;

use MyProject\Features\ArrayObjectTrait;

class Theme implements \ArrayAccess
{
    use ArrayObjectTrait;
    
    private $a;
    
    private $b;
}
