<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            ['name' => 'Alpha'],
            ['name' => 'Beta'],
            ['name' => 'Gamma'],
        ];

        foreach ($groups as $group) {
            Group::create($group);
        }
    }
}
