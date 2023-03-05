<?php

namespace GustavoMorais\Cms\Commands;

use Illuminate\Console\Command;

class CmsCommands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gus:cms {param : params for the command}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $param = $this->argument('param');

        print_r(json_encode([
            'GusCms param' => $param
        ]));echo "\n\n";

        return true;
    }
}
