<?php

class MyController
{
    public function editAction()
    {
        $objects = $this->repo->getObjects();

        $data = [];

        foreach ($objects as $object) {
            if ($object instanceof Alpha) {
                $data[] = new AlphaModel($this->get('router'), $object);
            }

            if ($object instanceof Bravo) {
                $data[] = new BravoModel($this->get('router'), $object);
            }
        }

        return $this->render('template.tpl', [ 'data' => $data ]);
    }

}
