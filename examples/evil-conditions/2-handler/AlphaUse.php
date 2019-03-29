<?php

namespace MyProject\Alpha;

$factory = function(Alpha $alpha) {
    return new AlphaHandler($alpha, $this->get('alpha_service'));
};

$alpha = $this->getAlpha();
$handler = $factory($alpha);

$handler->getName();

if ($request->get('delete')) {
    $handler->delete();
}