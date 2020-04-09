<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class TokenCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'token:generate
                            {token_name=test : The name for the token}
                            {user_id=1 : The ID of the user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a sanctum token for a specified user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('token_name');
        $user = User::find($this->argument('user_id'));
        $token = $user->createToken($name);
        $this->info($token->plainTextToken);
        return 0;
    }
}
