<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class appendComments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'appendComment {id} {comments?*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will append The comments in Users table';

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
     * @return int
     */
    public function handle()
    {
        $user= User::where('id', $this->argument('id'))->get();
    
        foreach($this->argument('comments') as $comment)
        {
        $user[0]->comments = ''.$user[0]->comments . ' ' . $comment;
        
        $user[0]->save();

        }
        $this->info($user[0]->name ."'s Comments was Appended");
    }
}
