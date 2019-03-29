<?php

namespace MyProject\Storage;

/**
 * Creates an instance of the Storage
 */
class StorageFactory
{
    /**
     * Create storage driver based on selected mode
     */
	public static function create(StorageRegistry $registry, string $mode): StorageInterface
    {
      	$driver = $registry->getDriver($mode);
      
		if (!$driver instanceof StorageInterface) {
			throw StorageException::invalidDriver($registry, $mode);
		}

      	return $driver;
    }
}