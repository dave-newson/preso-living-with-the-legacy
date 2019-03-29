<?php

namespace MyProject\User;

/**
 * Class UserImporter
 */
class UserImporter
{
	public function import(string $filename): void
	{
	    // Load file
        $file = new \SplFileObject($filename);

        // Read the file line-by-line
        foreach ($file->fgetcsv() as $data) {
            
            // TODO: Validate: User
            // ..

            // TODO: Reject if there's errors
            // ..

            // TODO: Update: User
            // ..
        }

        // TODO: Write to logs
        // ..
	}
}
