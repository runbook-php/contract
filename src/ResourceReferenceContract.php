<?php declare(strict_types=1);

namespace Wsw\Runbook\Contract;

interface ResourceReferenceContract
{
    public function add(string $key, $value);

    public function get(string $key);

    public function has(string $key): bool;
}
