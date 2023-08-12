<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates new User';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user['name'] = $this->ask("New user's Name");
        $user['email'] = $this->ask("New user's email");
        $user['password'] = $this->secret("New user's Password");
        $newUser = User::create($user);

        if($newUser) {
            $this->info('User '. $user['email']. ' created successfully');
            return 0;  
        }
        return -1;
    }
}
