<?php

namespace MyProject\Storage;

/**
 * Registers all tagged services against the registry
 */
class StorageDriverCompilerPass implements CompilerPassInterface
{
    const TAG = "my_project.storage.driver";
    const SERVICE = "my_storage.storage.registry";
    const SERVICE_METHOD = 'addProcessor';

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition(self::SERVICE);

        // Tagged Services: Apply to target service
        $taggedServices = $container->findTaggedServiceIds(self::TAG);
        $taggedServices = array_keys($taggedServices);

        // Add definition method call as arg
        foreach ($taggedServices as $serviceId) {
            $definition->addMethodCall(self::SERVICE_METHOD, [new Reference($serviceId)]);
        }
    }
}
