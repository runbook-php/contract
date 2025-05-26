<?php declare(strict_types=1);

namespace Wsw\Runbook\Contract\TaggedParse;

interface TaggedParseContract
{
    public function getName(): string;

    /**
     * @exception \RuntimeException
     * @return mixed
     */
    public function parse(string $value);
}
