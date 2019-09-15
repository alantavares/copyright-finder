<?php

declare(strict_types=1);

namespace Xthiago;

use PHPUnit\Framework\TestCase;

final class FooTest extends TestCase
{
    public function testCreateFoo() : void
    {
        $this->assertInstanceOf('Wrong', new Foo());
    }
}
