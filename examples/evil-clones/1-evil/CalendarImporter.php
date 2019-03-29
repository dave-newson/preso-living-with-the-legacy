<?php

namespace MyProject\Calendar;

/**
 * Class CalendarImporter
 */
class CalendarImporter
{
	public function import(string $file): void
	{
	    // Load file
        $file = new \SplFileObject($file);

        // Read the file line-by-line
        foreach ($file->fgetcsv() as $data) {
            
            // TODO: Validate: Calendar
            // ..

            // TODO: Reject if there's errors
            // ..

            // TODO: Update: Calendar
            // ..
        }

        // TODO: Write to logs
        // ..
	}
}
