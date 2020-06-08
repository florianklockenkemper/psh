<?php declare(strict_types=1);


namespace Shopware\Psh\ScriptRuntime\Execution;

use Shopware\Psh\Listing\Script;

/**
 * Since the script execution must produce live output this removes a direct dependency and enables testability of command execution
 */
interface Logger
{
    /**
     * @param Script $script
     */
    public function startScript(Script $script);

    /**
     * @param Script $script
     */
    public function finishScript(Script $script);


    /**
     * @param string $headline
     * @param string $subject
     * @param int $line
     * @param bool $isIgnoreError
     * @param int $index
     * @param int $max
     */
    public function logStart(string $headline, string $subject, int $line, bool $isIgnoreError, int $index, int $max);

    /**
     * @return void
     */
    public function logWait();

    /**
     * @param LogMessage $logMessage
     * @return mixed
     */
    public function log(LogMessage $logMessage);

    public function logSuccess();

    public function logFailure();

    /**
     * @param string $message
     * @return mixed
     */
    public function warn(string $message);
}
