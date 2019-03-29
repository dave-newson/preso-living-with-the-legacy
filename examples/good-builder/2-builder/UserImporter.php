<?php

namespace MyProject\User;

use MyProject\Importer\Builder\ImporterBuilder;
use MyProject\Importer\ImporterInterface;

class UserImporter implements ImporterInterface
{
    public function configure(ImporterBuilder $builder): void
    {
        $builder->id('user');
        $builder->name('my_project.importer.user.title');
    }
}
