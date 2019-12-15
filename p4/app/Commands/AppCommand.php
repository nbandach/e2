<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'playerchoice' => 'tinyint(2)',
            'computerchoice' => 'tinyint(2)',
            'winner' => 'tinyint(2)',
            'roundtime' => 'timestamp',
        ]);

        dump ('Migration complete.');
    }

    public function seed()
    {
        dump ('Seeds complete.');
    }

    public function fres()

    {

    }
}
