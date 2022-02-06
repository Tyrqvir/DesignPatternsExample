<?php

namespace App\Tests;

use App\Patterns\Fundamental\PropertyContainer\BlogPost;
use PHPUnit\Framework\TestCase;

class PropertyContainerTest extends TestCase
{
    public function test(): void
    {
        $blog = new BlogPost();
        $blog->addProperty('view_count', 100);
        $blog->addProperty('last_update', '2020-02-01');
        $blog->setProperty('last_update', '2020-02-02');

        $this->assertSame($blog->getProperty('view_count'), 100);
        $this->assertSame($blog->getProperty('last_update'), '2020-02-02');
    }
}
