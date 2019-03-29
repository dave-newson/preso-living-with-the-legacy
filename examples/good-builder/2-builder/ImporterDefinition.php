<?php

namespace MyProject\Importer;

class ImporterDefinition
{
    /** @var string */
    public $id;
    
    /** @var string */
    public $title;
    
    /** @var ImporterInterface */
    public $importer;
    
}
