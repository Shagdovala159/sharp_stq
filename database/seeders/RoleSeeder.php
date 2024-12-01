<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $rolePermissions = [
            "Operator" => ["Outgoing", "QC Pass", "Patrol", "Result"],
            "Supervisor" => [
                "Outgoing",
                "QC Pass",
                "Patrol",
                "Result & Approval",
                "Standar TT",
                "Standar FA",
                "Standar Patrol",
                "Reporting Outgoing",
                "Reporting Patrol",
                "Reporting QC Pass",
            ],
            "Manager" => [
                "Reporting Outgoing",
                "Result & Approval",
                "Reporting Patrol",
                "Reporting QC Pass",
            ],
            "Admin" => [
                "Outgoing",
                "QC Pass",
                "Patrol",
                "Result & Approval",
                "Standar TT",
                "Standar FA",
                "Standar Patrol",
                "Standar QC Pass",
                "Reporting Outgoing",
                "Reporting Patrol",
                "Reporting QC Pass",
                "Profile",
            ],
        ];

        foreach ($rolePermissions as $roleName => $permissions) {
            $role = Role::where("name", $roleName)->first();
            $role
                ->permissions()
                ->sync(Permission::whereIn("name", $permissions)->pluck("id"));
        }
    }
}
