<?php

namespace Jinas\Serial;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class Serial
{
    protected $port;
    protected $baudRate;

    const COMMAND = ["node", "script.js"];

    public function setPort(string $port)
    {

        $this->port = $port;
    }
    public function setBaudRate(int $rate)
    {
        $this->baudRate = $rate;
    }

    public function execute()
    {
        $process = new Process($this::COMMAND);

        $process->run(function ($type, $buffer) {
            if (Process::ERR === $type) {
                echo $buffer;
            } else {
                echo $buffer;
            }
        });
    }
}
