<?php

namespace PhpSpec\JsonFormattersExtension;

use PhpSpec\Extension\ExtensionInterface;
use PhpSpec\ServiceContainer;

/**
 * Extension
 *
 * @package JsonFormattersExtension
 *
 * @author Fareed Dudhia <fareeddudhia@gmail.com>
 */
class Extension implements ExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ServiceContainer $container)
    {
        $this->addFormatter($container, 'cat', 'PhpSpec\JsonFormattersExtension\Formatter\JsonFormatter');
    }

    /**
     * Add a formatter to the service container
     *
     * @param ServiceContainer $container
     * @param string           $name
     * @param string           $class
     */
    protected function addFormatter(ServiceContainer $container, $name, $class)
    {
        $container->set('formatter.formatters.Json.' . $name, function ($c) use ($class) {
            /** @var ServiceContainer $c */
            return new $class(
                $c->get('formatter.presenter'),
                $c->get('console.io'),
                $c->get('event_dispatcher.listeners.stats')
            );
        });
    }
}
