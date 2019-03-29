<?php

class BravoModel
{
    /** @var Bravo */
    private $object;
    
    /** @var RouterInterface */
    private $router;

    /**
     * BravoModel constructor.
     * @param Bravo $object
     */
    public function __construct(RouterInterface $router, Bravo $object)
    {
        $this->router = $router;
        $this->object = $object;
    }


    public function getName(): string
    {
        return $this->object->getTitle();
    }
    
    public function getLink(): string
    {
        return $this->router->generate('bravo.edit', [$this->object->getId(), $this->object->getSubId()]);
    }
}
