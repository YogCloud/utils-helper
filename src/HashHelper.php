<?php

declare(strict_types=1);

namespace Cexll\Utils\Helper;

class HashHelper
{
    /**
     * hash password.
     *
     * @param mixed $algo
     */
    public static function hash(string $password, $algo = PASSWORD_DEFAULT): string
    {
        return password_hash($password, $algo);
    }

    /**
     * verify password.
     */
    public static function verify(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }
}
