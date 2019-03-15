<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Dmkzwo\ContaoListExampleBundle\Tests;

use Dmkzwo\ContaoListExampleBundle\ContaoListExampleBundle;
use PHPUnit\Framework\TestCase;

class ContaoListExampleBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoListExampleBundle();

        $this->assertInstanceOf('Dmkzwo\ContaoListExampleBundle\ContaoListExampleBundle', $bundle);
    }
}
