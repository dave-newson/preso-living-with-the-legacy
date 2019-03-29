<?php

namespace MyProject\User;

use MyProject\Importer\ImporterTrait;

class UserImporter
{
  	use ImporterTrait;
  
  	public function import(string $filename): void
    {
      	$file = $this->openFile($filename);
      	$logs = [];
      	
      	foreach ($file->fgetcsv() as $row) {
      	    
      	    // Validate: User
            // ..

            if ($this->hasViolations()) {
                return;
            }

            // Update: User
            // ..
        }
      	
      	// ..

      	$this->writeLogs($logs);
    }
}
