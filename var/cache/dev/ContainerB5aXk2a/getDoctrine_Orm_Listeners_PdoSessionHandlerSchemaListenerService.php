<?php

namespace ContainerB5aXk2a;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.listeners.pdo_session_handler_schema_listener' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'SchemaListener'.\DIRECTORY_SEPARATOR.'AbstractSchemaListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'SchemaListener'.\DIRECTORY_SEPARATOR.'PdoSessionHandlerSchemaListener.php';

        return $container->privates['doctrine.orm.listeners.pdo_session_handler_schema_listener'] = new \Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener(($container->privates['session.handler.native'] ?? $container->load('getSession_Handler_NativeService')));
    }
}
