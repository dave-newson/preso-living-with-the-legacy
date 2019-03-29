<?php

namespace MyProject\X;

/**
 * Class XImporter
 */
class XImporter
{
	public function import(string $filename): void
	{
	    // Load file
        $file = new \SplFileObject($filename);

        // Read the file line-by-line
        foreach ($file->fgetcsv() as $data) {
            
            // TODO: Validate: X
            // ..

            // TODO: Reject if there's errors
            // ..

            // TODO: Update: X
            // ..
        }

        // TODO: Write to logs
        // ..
	}
}
