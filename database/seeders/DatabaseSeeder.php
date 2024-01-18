<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Position;
use App\Models\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'username' => 'admin',
            'password' => static::$password ?? Hash::make('admin123'),
        ]);

        $positions = [
            ['name' => 'Manager'],
            ['name' => 'Supervisor'],
            ['name' => 'Developer'],
            ['name' => 'Designer'],
            ['name' => 'Marketing'],
        ];

        $employees = [
            [
                'name' => 'Agung',
                'address' => 'Jakarta',
                'position_id' => 1,
                'entry_date' => date('Y-m-d', strtotime('2023-01-01')),
            ],
            [
                'name' => 'Fajar',
                'address' => 'Surabaya',
                'position_id' => 2,
                'entry_date' => date('Y-m-d', strtotime('2023-01-01')),
            ],
            [
                'name' => 'Sari',
                'address' => 'Malang',
                'position_id' => 2,
                'entry_date' => date('Y-m-d', strtotime('2023-02-01')),
            ],
            [
                'name' => 'Hanif',
                'address' => 'Tegal',
                'position_id' => 3,
                'entry_date' => date('Y-m-d', strtotime('2023-02-18')),
            ],
            [
                'name' => 'Raihan',
                'address' => 'Brebes',
                'position_id' => 3,
                'entry_date' => date('Y-m-d', strtotime('2023-02-27')),
            ],
            [
                'name' => 'Alfi',
                'address' => 'Kudus',
                'position_id' => 3,
                'entry_date' => date('Y-m-d', strtotime('2023-03-03')),
            ],
            [
                'name' => 'Andika',
                'address' => 'Bandung',
                'position_id' => 3,
                'entry_date' => date('Y-m-d', strtotime('2023-03-26')),
            ],
            [
                'name' => 'Tio',
                'address' => 'Malang',
                'position_id' => 3,
                'entry_date' => date('Y-m-d', strtotime('2023-03-30')),
            ],
            [
                'name' => 'Lita',
                'address' => 'Bojonegoro',
                'position_id' => 3,
                'entry_date' => date('Y-m-d', strtotime('2023-04-01')),
            ],
            [
                'name' => 'Rara',
                'address' => 'Kendal',
                'position_id' => 4,
                'entry_date' => date('Y-m-d', strtotime('2023-04-30')),
            ],
            [
                'name' => 'Fahrul',
                'address' => 'Blitar',
                'position_id' => 4,
                'entry_date' => date('Y-m-d', strtotime('2023-05-01')),
            ],
            [
                'name' => 'Vivi',
                'address' => 'Garut',
                'position_id' => 4,
                'entry_date' => date('Y-m-d', strtotime('2023-05-20')),
            ],
            [
                'name' => 'Pandu',
                'address' => 'Bandung',
                'position_id' => 4,
                'entry_date' => date('Y-m-d', strtotime('2023-05-23')),
            ],
            [
                'name' => 'Bambang',
                'address' => 'Makassar',
                'position_id' => 4,
                'entry_date' => date('Y-m-d', strtotime('2023-05-30')),
            ],
            [
                'name' => 'Mala',
                'address' => 'Batam',
                'position_id' => 4,
                'entry_date' => date('Y-m-d', strtotime('2023-06-29')),
            ],
            [
                'name' => 'Indri',
                'address' => 'Semarang',
                'position_id' => 5,
                'entry_date' => date('Y-m-d', strtotime('2023-07-15')),
            ],
            [
                'name' => 'Wina',
                'address' => 'Palembang',
                'position_id' => 5,
                'entry_date' => date('Y-m-d', strtotime('2023-08-15')),
            ],
            [
                'name' => 'Jaka',
                'address' => 'Cirebon',
                'position_id' => 5,
                'entry_date' => date('Y-m-d', strtotime('2023-09-11')),
            ],
            [
                'name' => 'Opi',
                'address' => 'Padang',
                'position_id' => 5,
                'entry_date' => date('Y-m-d', strtotime('2023-09-18')),
            ],
            [
                'name' => 'Linda',
                'address' => 'Bekasi',
                'position_id' => 5,
                'entry_date' => date('Y-m-d', strtotime('2023-10-10')),
            ],
        ];

        foreach ($positions as $position){
            Position::create($position);
        }
        foreach ($employees as $employee){
            Employee::create($employee);
        }
    }
}
