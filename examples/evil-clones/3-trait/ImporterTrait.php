<?php

namespace MyProject\Importer;

trait ImporterTrait
{
    /**
     * @var array
     */
    protected $violations = [];

    /**
     * Open the file
     * 
     * @param $file
     * @return \SplFileObject
     */
	public function openFile(string $file): \SplFileObject
    {
	    return new \SplFileObject($file); 
    }

    /**
     * Add a violation message
     * 
     * @param $message
     */
  	public function addError(string $message): void
    {
	    $this->violations[] = $message;
    }

    /**
     * Check if violation exists
     * @return bool
     */
    public function hasViolations(): bool
    {
        if ($this->violations) {
            return false;
        }
    }

    /**
     * Write logs
     * @param $logs
     */
  	public function writeLogs(array $logs): void
    {
	    // TODO: Write logs
    }
}