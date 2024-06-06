<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class UnseedData extends Command
{
    protected $signature = 'db:unseed';
    protected $description = 'Remove seeded data from the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Add logic to delete the seeded data
        DB::table('users')->delete();
        DB::table('posts')->delete();
        DB::table('comments')->delete();
        DB::table('role_user')->delete(); // Pivot table for roles
        DB::table('post_tag')->delete();  // Pivot table for tags
        DB::table('categories')->delete();

        $this->info('Seeded data removed successfully.');
    }
}
