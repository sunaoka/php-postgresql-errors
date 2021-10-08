<?php

namespace Sunaoka\PostgresError\Tests;

use PHPUnit\Framework\TestCase;
use Sunaoka\PostgresError\PostgresError;

class PostgresErrorTest extends TestCase
{
    public function test()
    {
        self::assertSame('00000', PostgresError::SUCCESSFUL_COMPLETION);
    }
}
