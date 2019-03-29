<?php

class HandlerFactory
{
    private $handlers = [];
    
    public function registerHandler($factory)
    {
        $this->handlers[] = $factory;
    }
    
    public function create($object)
    {
        foreach ($this->handlers as $handler) {
            
            // Use if compatible
            if ($handler->isCompatible($object)) {
                return $handler->createHandler($object);
            }
        }
        
        return null;
    }
}
