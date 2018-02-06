<?php

namespace Spd\RestBundle\Tests;

use Spd\RestBundle\Project;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testStartBool()
    {
        $this->assertTrue(Project::start(), 'Some message!');
    }
}
