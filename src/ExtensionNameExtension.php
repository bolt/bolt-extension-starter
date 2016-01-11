<?php

namespace Bolt\Extension\YourName\ExtensionName;

use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\Extension\SimpleExtension;

/**
 * ExtensionName extension class.
 *
 * @author Your Name <you@example.com>
 */
class ExtensionNameExtension extends SimpleExtension
{
    /**
     * {@inheritdoc}
     */
    protected function registerAssets()
    {
        // Add some web assets from the web/ directory
        return [
            new Stylesheet('extension.css'),
            new JavaScript('extension.js'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function registerTwigFunctions()
    {
        return [
            'my_twig_function' => 'myTwigFunction',
        ];
    }

    /**
     * The callback function when {{ my_twig_function() }} is used in a template.
     *
     * @return string
     */
    public function myTwigFunction()
    {
        $context = [
            'something' => mt_rand(),
        ];

        return $this->renderTemplate('extension.twig', $context);
    }
}
