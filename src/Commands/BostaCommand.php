<?php

namespace Almesery\Bosta\Commands;

use Illuminate\Console\Command;

class BostaCommand extends Command
{
    public $signature = 'laravel-bosta';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}