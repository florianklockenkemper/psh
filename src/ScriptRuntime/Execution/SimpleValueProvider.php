<?php declare(strict_types=1);

namespace Shopware\Psh\ScriptRuntime\Execution;

/**
 * represents a constant environment variable
 */
class SimpleValueProvider implements ValueProvider
{
    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return  $this->value;
    }
}
