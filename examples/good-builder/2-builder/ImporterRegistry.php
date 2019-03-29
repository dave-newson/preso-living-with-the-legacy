<?php

namespace MyProject\Importer;

use MyProject\Importer\Builder\ImporterBuilder;

class ImporterRegistry
{
    /** @var ImporterDefinition[] */
    private $importers = [];
    
    public function register(ImporterInterface $importer): void
    {
        // Create definition
        $definition = new ImporterDefinition();
        $definition->importer = $importer;
        
        // Execute builder
        $builder = new ImporterBuilder($definition);
        $importer->configure($builder);
        
        // Save to collection
        $this->importers[$definition->id] = $definition;
    }
    
    public function getImporter($id)
    {
        return $this->importers[$id];
    }
    
}