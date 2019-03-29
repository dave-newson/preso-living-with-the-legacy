<?php

namespace MyProject\Importer;

/**
 * Class AbstractImporter
 */
abstract class AbstractImporter
{
  	public abstract function validate(string $data): bool;
  
  	public abstract function update(string $data): void;
  
	public function import(string $file): void
	{
        // Load file
        $file = new \SplFileObject($file);

        // Read the file line-by-line
        foreach ($file->fgetcsv() as $data) {

            // Validate entity
            $valid = $this->validate($data);

            // Reject if there's errors
            if (!$valid) {
                return;
            }

            // Update entity
            $this->update($data);
        }

        // TODO: Write to logs
        // ..
	}
}
