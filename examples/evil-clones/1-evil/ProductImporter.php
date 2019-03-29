<?php

namespace MyProject\Product;

/**
 * Class ProductImporter
 */
class ProductImporter
{
	public function import(string $filename): void
	{
	    // Load file
        $file = new \SplFileObject($filename);

        // Read the file line-by-line
        foreach ($file->fgetcsv() as $data) {
            
            // TODO: Validate: Product
            // ..

            // TODO: Reject if there's errors
            // ..

            // TODO: Update: Product
            // ..
        }

        // TODO: Write to logs
        // ..
	}
}
