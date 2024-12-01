<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
        "Outgoing",
        "QC Pass",
        "Patrol",
        "Result",
        "Result & Approval",
        "Standar TT",
        "Standar FA",
        "Standar Patrol",
        "Standar QC Pass",
        "Reporting Outgoing",
        "Reporting Patrol",
        "Reporting QC Pass","Profile"];
        
        $descriptions = [
            "Inspection Unit Washing Machine",
            "New Model Washing Machine",
            "Patrol Unit Washing Machine",
            "Result Check Washing Machine",
            "Result Check Washing Machine",
            "Standard Setting Twin Tub",
            "Standard Setting Full Auto",
            "Standard Setting Patrol Unit",
            "Standard Setting QC Pass New Model",
            "Report Data Result Outgoing",
            "Report Data Result Patrol",
            "Report Data Result QC Pass",
            "User-Shift-Job Class Settings"
        ];

    
        foreach ($names as $key => $name) {
            Permission::create([
                'name' => $name,
                'description' => $descriptions[$key]
            ]);
        }
    }
}
