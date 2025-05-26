<?php declare(strict_types=1);

namespace Wsw\Runbook\Contract\TaggedParse;

interface ComparisonOperatorContract
{
    public function setValue($value);

    public function getValue();
}
