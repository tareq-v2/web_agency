<?php

namespace App\Console\Commands;

use App\Models\company;
use App\Models\FakeData;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class CreateNewUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user {--count=}';


    protected $description = 'Create a new user';


    public function handle()
    {
        // $title = $this->option('title');
        // $description = $this->option('description');
        // $button_text = $this->option('button_text');
        // $button_url = $this->option('button_url');

        $count = $this->option('count');
        $bar = $this->output->createProgressBar($count);
        $bar->start();
        for($i = 1; $i <= $count; $i++){

            $title = Str::random(8);
            $description = Str::random(10);
            $button_text = Str::random(5);
            $button_url = Str::random(7);
            company::create([
                'title' => $title,
                'description' => $description . "@gmail.com",
                'button_text' => $button_text,
                'button_url' => $button_url,
            ]);
            $bar->advance();
        }
        $bar->finish();
        $this->info('Successfully Created ' . $count . "Users");
    }
}
