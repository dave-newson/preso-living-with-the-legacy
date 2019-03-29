<?php

namespace MyProject\User;

use MyProject\Importer\ImporterInterface;

class UserImporter implements ImporterInterface
{
    public function getId(): string
    {
        return 'user';
    }

    public function getTitle(): string
    {
        return 'my_project.importer.user.title';
    }
}
