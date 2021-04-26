<?php

declare(strict_types=1);

use Cexll\Utils\Helper\ArrayHelper;
use Cexll\Utils\Helper\NumberHelper;
use Cexll\Utils\Helper\StringHelper;

use PHPUnit\Framework\TestCase;

final class MainTest extends TestCase
{
    public function testFailure()
    {
        $str = StringHelper::highRandomString(10);
        $num = NumberHelper::highGenerateNumber(10);

        $this->expectOutputString((string)$num);
        $this->expectOutputString($str);
    }
}
