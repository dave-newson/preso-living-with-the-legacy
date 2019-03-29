<?php

class MyController
{
    public function editAction()
    {
        $objects = $this->repo->getObjects();

        $data = [];

        foreach ($objects as $object) {
            $data[] = $this->viewModelFactory->interpret($object);
        }

        return $this->render('template.tpl', [ 'data' => $data ]);
    }

}
