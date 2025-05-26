<?php declare(strict_types=1);

namespace Wsw\Runbook\Contract;

interface OutputContract
{
    public const SUCCESS = 0;
    public const FAILURE = 1;
    public const SKIPPED = 2;
    public function success(): void;

    public function failure(?string $errorlog = null): void;

    public function skip(): void;

    public function addProperty(string $key, $values): void;

    public function getProperty(string $key);

    public function allProperties(): array;

    public function getExitCode(): int;

    public function getError(): ?string;
}
