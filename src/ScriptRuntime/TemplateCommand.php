<?php declare(strict_types=1);

namespace Shopware\Psh\ScriptRuntime;

use Shopware\Psh\ScriptRuntime\Execution\Template;

class TemplateCommand implements Command
{
    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $destination;

    /**
     * @var int
     */
    private $lineNumber;

    public function __construct(
        string $source,
        string $destination,
        int $lineNumber
    ) {
        $this->source = $source;
        $this->destination = $destination;
        $this->lineNumber = $lineNumber;
    }

    public function getLineNumber(): int
    {
        return $this->lineNumber;
    }

    public function createTemplate(): Template
    {
        return new Template(
            $this->source,
            $this->destination
        );
    }
}
