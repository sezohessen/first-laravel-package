<?php

namespace laravel\Larapack\Commands;

use Illuminate\Console\Command;

class LarapackCommand extends Command
{
    public $signature = 'larapack';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
