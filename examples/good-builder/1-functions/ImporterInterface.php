<?php

namespace MyProject\Importer;

interface ImporterInterface
{
    public function getId(): string;
    
    public function getTitle(): string;
}