<?php

declare(strict_types=1);

namespace Cexll\Utils\Helper;

class HashHelper
{
    /**
     * hash password
     *
     * @param string $password
     * @param mixed $algo
     * @return string
     */
    public static function hash(string $password, mixed $algo = PASSWORD_DEFAULT): string
    {
        return password_hash($password, $algo);
    }

    /**
     * verify password 
     *
     * @param string $password
     * @param string $hash
     * @return boolean
     */
    public static function verify(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }
}
