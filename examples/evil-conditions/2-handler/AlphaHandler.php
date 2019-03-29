<?php

class AlphaHandler implements HandlerInterface
{
    /** @var Alpha */
    private $model;
    
    /** @var AlphaService */
    private $alphaService;

    /**
     * @param Alpha $model
     * @param AlphaService $alphaService
     */
    public function __construct(Alpha $model, $alphaService)
    {
        $this->model = $model;
        $this->alphaService = $alphaService;
    }

    public function getName()
    {
        return $model->getPublishedTitle();
    }
    
    public function delete() {
        $this->alphaService->remove($this->model);
    }
}
