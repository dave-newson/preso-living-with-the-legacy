<?php

namespace MyProject\Importer\Builder;

use MyProject\Importer\ImporterDefinition;

class ImporterBuilder
{
    /** @var ImporterDefinition */
    private $definition;

    public function __construct(ImporterDefinition $definition)
    {
        $this->definition = $definition;
    }

    public function name($name): void {
        $this->definition->title = $name;
    }
    
    public function id($id): void {
        $this->definition->id = $id;
    }
}
