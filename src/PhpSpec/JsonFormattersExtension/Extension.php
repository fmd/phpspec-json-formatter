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
        $class = 'PhpSpec\JsonFormattersExtension\Formatter\JsonFormatter';
        $container->set('formatter.formatters.json', function ($c) use ($class) {
            /** @var ServiceContainer $c */
            return new $class(
                $c->get('formatter.presenter'),
                $c->get('console.io'),
                $c->get('event_dispatcher.listeners.stats')
            );
        });
    }
}
