<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $employees = [
            ['name' => 'Alice Johnson',   'email' => 'alice@example.com',   'joining_date' => '2017-03-15', 'is_active' => true],
            ['name' => 'Bob Martinez',    'email' => 'bob@example.com',     'joining_date' => '2016-07-22', 'is_active' => true],
            ['name' => 'Carol White',     'email' => 'carol@example.com',   'joining_date' => '2015-11-01', 'is_active' => true],
            ['name' => 'David Lee',       'email' => 'david@example.com',   'joining_date' => '2018-01-10', 'is_active' => true],
            ['name' => 'Eva Brown',       'email' => 'eva@example.com',     'joining_date' => '2014-06-30', 'is_active' => true],
            ['name' => 'Frank Wilson',    'email' => 'frank@example.com',   'joining_date' => '2017-09-05', 'is_active' => true],
            ['name' => 'Grace Taylor',    'email' => 'grace@example.com',   'joining_date' => '2016-02-18', 'is_active' => true],
            ['name' => 'Henry Anderson',  'email' => 'henry@example.com',   'joining_date' => '2013-12-25', 'is_active' => true],
            ['name' => 'Irene Thomas',    'email' => 'irene@example.com',   'joining_date' => '2015-04-14', 'is_active' => false],
            ['name' => 'Jack Jackson',    'email' => 'jack@example.com',    'joining_date' => '2016-08-20', 'is_active' => false],
            ['name' => 'Karen Harris',    'email' => 'karen@example.com',   'joining_date' => '2021-05-10', 'is_active' => true],
            ['name' => 'Liam Martin',     'email' => 'liam@example.com',    'joining_date' => '2022-03-01', 'is_active' => true],
            ['name' => 'Mia Garcia',      'email' => 'mia@example.com',     'joining_date' => '2023-07-19', 'is_active' => true],
            ['name' => 'Noah Davis',      'email' => 'noah@example.com',    'joining_date' => '2022-11-30', 'is_active' => true],
            ['name' => 'Olivia Miller',   'email' => 'olivia@example.com',  'joining_date' => '2024-01-15', 'is_active' => true],
            ['name' => 'Paul Wilson',     'email' => 'paul@example.com',    'joining_date' => '2021-09-08', 'is_active' => false],
            ['name' => 'Quinn Moore',     'email' => 'quinn@example.com',   'joining_date' => '2023-02-22', 'is_active' => false],
            ['name' => 'Rachel Clark',    'email' => 'rachel@example.com',  'joining_date' => '2022-06-14', 'is_active' => false],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
