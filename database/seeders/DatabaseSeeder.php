<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductInfo;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Mr Wassim Hakim',
            'email' => 'Mr.Wassim.Hakim@admin.com',
            'password' => Hash::make('admin'),
        ]);

        User::factory()->create([
            'name' => 'moderator',
            'email' => 'moderator@moderator.com',
            'password' => Hash::make('moderator'),
        ]);

        $adminRole = Role::firstOrCreate(['name' => 'super_admin']);
        $moderatorRole = Role::firstOrCreate(['name' => 'moderator']);

        $user = User::where('email', 'Mr.Wassim.Hakim@admin.com')->first();
        if ($user) {
            $user->assignRole('super_admin');
        }

        $moderator = User::where('email', 'moderator@moderator.com')->first();
        if ($moderator) {
            $moderator->assignRole('moderator');
        }

        // Create the panel access permission
        Permission::firstOrCreate(['name' => 'panel_access']);

        // Assign it to admin roles
        $adminRole->givePermissionTo('panel_access');
        $moderatorRole->givePermissionTo('panel_access');

        // Create panel_user role with panel access
        $panelUserRole = Role::firstOrCreate(['name' => 'panel_user']);
        $panelUserRole->givePermissionTo('panel_access');

        // Create regular user role without panel access
        $userRole = Role::firstOrCreate(['name' => 'user']);
        // No panel_access permission given to user role

        $tags = [
            'Action',
            'Adventure',
            'RPG',
            'Simulation',
            'Strategy',
            'Sports',
            'Puzzle',
            'Racing',
            'Fighting',
            'Platformer',
            'Shooter',
            'Family',
            'Multiplayer',
            'Indie',
            'Exclusive'
        ];

        foreach ($tags as $tagName) {
            Tag::firstOrCreate(['name' => $tagName]);
        }

        $this->command->info('Product tags seeded successfully!');
    }
}
