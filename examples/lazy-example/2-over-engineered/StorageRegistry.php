<?php

namespace MyProject\Storage;

/**
 * Storage driver registry
 */
class StorageRegistry
{
  	/** StorageInterface[] */
    private $drivers = [];
  
  	/**
     * Register a driver
     */
  	public function registerDriver(StorageInterface $driver): void
    {
        $key = $driver->getName();
        
      	if ($this->drivers[$key]) {
          	throw StorageException::namingCollision($key, $this->drivers[$key], $driver);
        }
      	
      	$this->drivers[] = $driver;
    }
  
  	/**
     * @param string $name
     * @return StorageInterface|null
     */
  	public function getDriver($name) {
      	$driver = null;
      
      	if (array_key_exists($name, $this->drivers)) {
          $driver = $this->drivers[$name];
        }
            
        return $driver;
    }
            
    /**
     * @return StorageInterface[]
     */
    public function getDrivers(): array {
      	return $this->drivers;
    }
}