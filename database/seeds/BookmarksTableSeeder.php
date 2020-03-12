<?php

use App\Bookmark;
use Illuminate\Database\Seeder;

/**
 * Class BookmarksTableSeeder
 */
class BookmarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bookmark::class, 100)->create();
    }
}
