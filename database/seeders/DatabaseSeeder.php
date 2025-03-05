<?php

namespace Database\Seeders;

use App\Models\LeadSource;
use App\Models\PipelineStage;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = [
            'Admin',
            'Employee'
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $admin = User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@admin.com',
        ]);


        User::factory()->count(10)->create();

        $users = User::all();

        foreach ($users as $user) {

            if ($user->id == 1) {
                $user->assignRole('Admin', 'Employee');
            }
            $user->assignRole('Employee');
        }

        $leadSources = [
            'Website',
            'Online AD',
            'Twitter',
            'LinkedIn',
            'Webinar',
            'Trade Show',
            'Referral',
        ];

        foreach ($leadSources as $leadSource) {
            LeadSource::create(['name' => $leadSource]);
        }

        $pipelineStages = [
            [
                'name' => 'Lead',
                'position' => 1,
                'is_default' => true,
            ],
            [
                'name' => 'Contact Made',
                'position' => 2,
            ],
            [
                'name' => 'Proposal Made',
                'position' => 3,
            ],
            [
                'name' => 'Proposal Rejected',
                'position' => 4,
            ],
            [
                'name' => 'Customer',
                'position' => 5,
            ]
        ];

        foreach ($pipelineStages as $stage) {
            PipelineStage::create($stage);
        }
    }
}
