<?php

namespace MyProject\Storage;

class StorageFactory
{
  	/**
     * Create storage driver based on selected mode
     *
     * @param ContainerInterface $container
     * @return StorageInterface
     */
	public static function create(ContainerInterface $container): StorageInterface
    {
      	$mode = $container->getParameter("storage_mode");
      
      	// Pick storage driver
      	if ($mode == "json") {
          	return new JsonStorage($container->getParameter('kernel.root'));
        } elseif ($mode == "redis") {
          	return new RedisStorage($container->get('redis'));
        }

        throw new \LogicException("Invalid storage driver specified.");
    }
}