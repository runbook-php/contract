<?php declare(strict_types=1);

namespace Wsw\Runbook\Contract;

interface ParamsContract
{
    public function count(): int;

    public function get(string $key, $default = null);

    public function has(string $key): bool;
}
