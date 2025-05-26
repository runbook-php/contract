<?php declare(strict_types=1);

namespace Wsw\Runbook\Contract;

interface StandardOutputContract
{
    public function print($message, array $context = []);
}
