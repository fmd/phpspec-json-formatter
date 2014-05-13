<?php

namespace PhpSpec\JSONFormattersExtension\Formatter;

use PhpSpec\Event\SuiteEvent;
use PhpSpec\Event\ExampleEvent;
use PhpSpec\Formatter\DotFormatter;

use Fab\Factory as FabFactory;

/**
 * JSONFormatter
 *
 * @package JSONFormattersExtension
 *
 * @author Jeff Welch <whatthejeff@gmail.com>
 * @author Matthew Davis <matt@mattdavis.co.uk>
 */
class JSONFormatter extends DotFormatter
{
    /**
     * The number of examples
     *
     * @var integer
     */
    private $examplesCount = 0;

    /**
     * Actions to perform before the test suite
     *
     * @param SuiteEvent $event
     */
    public function beforeSuite(SuiteEvent $event)
    {
        return parent::beforeSuite($event);
    }

    /**
     * Actions to perform after each example
     *
     * @param ExampleEvent $event
     */
    public function afterExample(ExampleEvent $event)
    {
        return parent::afterExample($event);
    }

    /**
     * Actions to perform after the test suite
     *
     * @param SuiteEvent $event
     */
    public function afterSuite(SuiteEvent $event)
    {
        return parent::afterSuite($event);
    }
}
