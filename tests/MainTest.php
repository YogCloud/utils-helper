<?php

declare(strict_types=1);
use Cexll\Utils\Helper\HashHelper;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
final class MainTest extends TestCase
{
    public function testFailure()
    {
        $hash = HashHelper::hash('123456');
        var_dump($hash);
        $bool = HashHelper::verify('123456', '$2y$10$QTZjGNps6Mp4OdaMoSgYhO2VKZIW9ykrgbFPhhIyKi1ZptYeRQaQ6');
        var_dump($bool);
    }
}
