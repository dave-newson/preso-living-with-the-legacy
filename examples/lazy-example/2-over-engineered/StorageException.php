<?php

namespace MyProject\Storage;

class StorageException extends \DomainException
{
  	/**
     * Thrown in response to an invalid driver being requested
     */
    public static function invalidDriver(StorageRegistry $registry, string $mode): self
    {
      	$names = array_map(function(StorageInterface $driver) { 
          	return $driver->getName();
        }, $registry->getDrivers());
      
      	return new self(sprintf(
          	'Invalid storage driver "%s". Should be one of [%s]',
          	$mode,
          	implode(', ', $names)
        ));
    }

    /**
     * Thrown when two storage drivers attempt to use the same key
     */
    public static function namingCollision(string $name, StorageInterface $a, StorageInterface $b): self
    {
        return new self(sprintf(
            'Storage driver collision; two storage drivers attempted to use the same key "%s" [%s, %s]',
            $name,
            get_class($a),
            get_class($b)
        ));
    }
}