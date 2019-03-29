<?php

namespace MyProject\Importer;

use MyProject\Importer\Builder\ImporterBuilder;

interface ImporterInterface
{
    public function configure(ImporterBuilder $builder): void;
}