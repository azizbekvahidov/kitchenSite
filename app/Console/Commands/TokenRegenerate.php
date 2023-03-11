<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class TokenRegenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'token:regenerate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'deleting and creating an authorized user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        /** @var User $user */
        $user = User::query()->where('login', '=', 'admin')->first();
        $user->tokens()->delete();
        $token = $user->createToken('new token ')->plainTextToken;
        $this->components->info('Ваш токен: ' .$token);
        return Command::SUCCESS;
    }
}
