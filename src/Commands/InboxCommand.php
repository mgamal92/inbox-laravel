<?php

namespace MG\Inbox\Commands;

use Illuminate\Console\Command;

class InboxCommand extends Command
{
    public $signature = 'laravel-inbox';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
