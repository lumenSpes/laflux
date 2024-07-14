<?php
namespace Database\Seeders;
use ExtensionsValley\Menumanager\Database\seeds\MenuSeeder;
use ExtensionsValley\Modulemanager\Database\seeds\ModuleSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeeder::class);
         $this->call(GroupsSeeder::class);
         $this->call(ExtensionManagerSeeder::class);
         $this->call(ACLSeeder::class);
         $this->call(MenuSeeder::class);
         $this->call(ModuleSeeder::class);
    }
}
