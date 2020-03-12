<?php

use App\Organization;
use Illuminate\Database\Seeder;

/**
 * Class OrganizationsTableSeeder
 */
class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Organization::class, 3)->create();
    }
}
