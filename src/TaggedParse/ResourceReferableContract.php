<?php declare(strict_types=1);

namespace Wsw\Runbook\Contract\TaggedParse;

use Wsw\Runbook\Contract\ResourceReferenceContract;
use Wsw\Runbook\Contract\TaggedParse\TaggedParseContract;

interface ResourceReferableContract
{
    public function setReferences(ResourceReferenceContract &$references): TaggedParseContract;
}
