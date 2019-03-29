<?php

class MyController
{
    public function editAction()
    {
        $objects = $this->repo->getObjects();
     
        $data = [];
        
        foreach ($objects as $object) {
            if ($object instanceof Alpha) {
                $data[] = [
                    'id' => $object->getName(), 
                    'name' => $object->getDescription(),
                    'type' => 'a',
                    'visible' => true,
                ];
            }
            
            if ($object instanceof Bravo) {
                $data[] = [
                    'id' => $object->getId(),
                    'subid' => $object->getSubId(),
                    'name' => $object->getTitle(),
                    'type' => 'b',
                    'visible' => false,
                ];
            }
        }
        
        return $this->render('template.tpl', [ 'data' => $data ]);
    }
    
}