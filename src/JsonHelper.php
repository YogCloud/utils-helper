<?php

declare(strict_types=1);

namespace Cexll\Utils\Helper;

class JsonHelper
{
    public static function Encode(array $data, string $flags = JSON_UNESCAPED_UNICODE): string
    {
        return json_encode($data, $flags);
    }

    public static function Decode(string $data, bool $assoc = true): array
    {
        return json_decode($data, $assoc);
    }
}
