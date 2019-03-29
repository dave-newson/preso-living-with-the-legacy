<?php

class AlphaModel
{
    /** @var Alpha */
    private $object;
    
    /** @var RouterInterface */
    private $router;

    /**
     * AlphaModel constructor.
     * @param Alpha $object
     */
    public function __construct(RouterInterface $router, Alpha $object)
    {
        $this->router = $router;
        $this->object = $object;
    }


    public function getName(): string
    {
        return $this->object->getDescription();
    }
    
    public function getLink(): string
    {
        return $this->router->generate('alpha.edit', [$this->object->getName()]);
    }
}
