<?php

use App\Collection;
use Illuminate\Database\Seeder;

/**
 * Class CollectionsTableSeeder
 */
class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Collection::class, 10)->create();
    }
}
