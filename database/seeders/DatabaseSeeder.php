<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    private $permissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
        'assignment-list',
        'assignment-create',
        'assignment-edit',
        'assignment-delete',
        'assignment-submission'
    ];

    private $teacherPermissions = [
        'assignment-list',
        'assignment-create',
        'assignment-edit',
        'assignment-delete'
    ];

    private $adminPermissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
        'assignment-list',
        'assignment-create',
        'assignment-edit',
        'assignment-delete'
    ];

    private $studentPermissions = [
        'assignment-submission'
    ];

    public function run(): void
    {
        // Create all permissions
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create Admin role and assign permissions
        $adminRole = Role::create(['name' => 'Admin']);
        $adminPermissions = Permission::whereIn('name', $this->adminPermissions)->get();
        $adminRole->syncPermissions($adminPermissions);

        // Create Teacher role and assign permissions
        $teacherRole = Role::create(['name' => 'Teacher']);
        $teacherPermissions = Permission::whereIn('name', $this->teacherPermissions)->get();
        $teacherRole->syncPermissions($teacherPermissions);

        // Create Student role and assign permissions
        $studentRole = Role::create(['name' => 'Student']);
        $studentPermissions = Permission::whereIn('name', $this->studentPermissions)->get();
        $studentRole->syncPermissions($studentPermissions);

        // Create an admin user and assign Admin role
        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@mpandaguta.com',
            'password' => Hash::make('password123')
        ]);
        $adminUser->assignRole($adminRole);

        // Create a teacher user and assign Teacher role
        $teacherUser = User::create([
            'name' => 'Teacher User',
            'email' => 'teacher@mpandaguta.com',
            'password' => Hash::make('password123')
        ]);
        $teacherUser->assignRole($teacherRole);

        // Create a student user and assign Student role
        $studentUser = User::create([
            'name' => 'Student User',
            'email' => 'student@mpandaguta.com',
            'password' => Hash::make('password123')
        ]);
        $studentUser->assignRole($studentRole);
    }
}
