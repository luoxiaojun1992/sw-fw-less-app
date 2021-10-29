<?php

namespace App\commands;

use SwFwLess\commands\AbstractCommand;

class TestCommand extends AbstractCommand
{
    public $signature = 'test';

    protected function handle()
    {
        $this->output->writeln('Test');
    }
}
