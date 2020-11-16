<?php

namespace Jinas\Serial;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class Serial
{
    protected $port = "COM5";
    protected $baudRate = 9600;
    protected $delimeter = "\n";

    public function setPort(string $port)
    {
        $this->port = $port;
    }
    public function setBaudRate(int $rate)
    {
        $this->baudRate = $rate;
    }

    public function setDelimeter(string $delimeter)
    {
        $this->delimeter = $delimeter;
    }

    public function execute()
    {
        $process = new Process(["node", "script.js", $this->port, $this->baudRate, $this->delimeter]);

        $process->run(function ($type, $buffer) {
            if (Process::ERR === $type) {
                echo $buffer;
            } else {
                echo $buffer;
            }
        });
    }
}
