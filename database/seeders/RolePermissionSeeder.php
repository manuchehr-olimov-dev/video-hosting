<?php

namespace Database\Seeders;

use App\Enums\Permissions;
use App\Enums\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            $roles = Roles::cases();
            $permissions = Permissions::cases();

            foreach ($permissions as $permission) {
                Permission::query()->firstOrCreate([
                    'name' => $permission,
                    'guard_name' => config('auth.defaults.guard'),
                ]);
            }

            foreach ($roles as $roleName) {
                $role = Role::query()->firstOrCreate([
                    'name' => $roleName,
                    'guard_name' => config('auth.defaults.guard'),
                ]);

                $role->syncPermissions(
                    Roles::from($roleName->value)->getPermissions()
                );
            }
        });
    }
}
