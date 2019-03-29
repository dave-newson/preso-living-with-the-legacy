<?php

namespace MyProject\Location;

/**
 * Class LocationImporter
 */
class LocationImporter
{
	public function import(string $file): void
	{
	    // Load file
        $file = new \SplFileObject($file);

        // Read the file line-by-line
        foreach ($file->fgetcsv() as $data) {
            
            // TODO: Validate: Location
            // ..

            // TODO: Reject if there's errors
            // ..

            // TODO: Update: Location
            // ..
        }

        // TODO: Write to logs
        // ..
	}
}
