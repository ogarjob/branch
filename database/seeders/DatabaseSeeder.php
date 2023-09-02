<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'id'         => 1,
            'email'      => 'ask4rapzo@gmail.com',
            'first_name' => 'Ogar',
            'last_name'  => 'Job',
        ])->update(['created_by' => 1]);

        User::factory()->create([
            'id'         => 2,
            'first_name' => 'Joseph',
            'last_name'  => 'Bassey',
            'email'      => 'ogarjobbassey@gmail.com',
            'phone'      => '08126012460',
        ])->update(['created_by' => 1]);

        User::factory()->create([
            'id'         => 3,
            'first_name' => 'Nicholine',
            'last_name'  => 'Mgbe',
            'type'       => 'customer',
            'email'      => 'nickyh@gmail.com',
            'phone'      => '08126012678',
        ])->update(['created_by' => 1]);

        User::factory()->create([
            'id'         => 4,
            'first_name' => 'Mary',
            'last_name'  => 'Akpan',
            'type'       => 'customer',
            'email'      => 'mary@gmail.com',
            'phone'      => '08126012679',
        ])->update(['created_by' => 1]);

        Type::factory()->create([
            'id'                => 1,
            'name'              => 'Emergency',
            'minimum_balance'   => 1000,
            'interest_rate'     => 10,
        ]);

        Type::factory()->create([
            'id'                => 2,
            'name'              => 'Locked',
            'minimum_balance'   => 2000,
            'interest_rate'     => 20,
        ]);
    }
}
