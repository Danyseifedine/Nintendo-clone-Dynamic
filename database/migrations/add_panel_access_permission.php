<?php

use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    public function up(): void
    {
        // Create panel access permission
        $permission = Permission::firstOrCreate([
            'name' => 'panel_access',
            'guard_name' => 'web',
        ]);

        // Optionally assign to admin role if it exists
        $adminRole = Role::where('name', 'admin')->first();
        if ($adminRole) {
            $adminRole->givePermissionTo($permission);
        }

        $moderatorRole = Role::where('name', 'moderator')->first();
        if ($moderatorRole) {
            $moderatorRole->givePermissionTo($permission);
        }
    }

    public function down(): void
    {
        // Remove permission on rollback
        Permission::where('name', 'panel_access')->delete();
    }
};
