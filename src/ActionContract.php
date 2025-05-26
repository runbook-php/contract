<?php declare(strict_types=1);

namespace Wsw\Runbook\Contract;

interface ActionContract
{
    public function execute(ParamsContract $params, OutputContract $output): OutputContract;
}
