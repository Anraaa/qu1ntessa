<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void 
    {
        // Ensure roles exist
        $mahasiswaRole = Role::firstOrCreate(['name' => 'Mahasiswa', 'guard_name' => 'web']);
        $adminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
        
        // Assign roles to specific users based on email
        $mahasiswaUser = User::where('email', 'mhs@admin.com')->first();
        $adminUser = User::where('email', 'admin@example.com')->first();

        if ($mahasiswaUser) {
            $mahasiswaUser->assignRole($mahasiswaRole);
        }

        if ($adminUser) {
            $adminUser->assignRole($adminRole);
        }
    }
}