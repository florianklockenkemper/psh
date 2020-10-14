<?php declare(strict_types=1);

namespace Shopware\Psh\ScriptRuntime\Execution;

/**
 * Enables different sources to provide and lazy load values for the templates
 */
interface ValueProvider
{
    public function getValue(): string;
}
