<?php declare(strict_types=1);

namespace Wsw\Runbook\Contract\Vault;

interface DataEncryptedContract
{
    public function getIv(): string;

    public function getCiphertext(): string;

    public function toArray(): array;
}
