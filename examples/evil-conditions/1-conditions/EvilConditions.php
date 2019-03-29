<?php

if ($object instanceof Alpha) {
    // Do a thing
} elseif ($object instanceof Bravo) {
    // Do another thing
}

switch (get_class($object)) {
    case Alpha::class:
        // Something
        break;
    case Bravo::class:
        // Something else
        break;
}

if ($object->getType() == Alpha::TYPE) {
    // Please stop
} elseif ($object->getType() == Bravo::TYPE) {
    // Oh god why
}