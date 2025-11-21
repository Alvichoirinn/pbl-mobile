<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employee = [
            "first_name" => "Tatang",
            "last_name" => "Sutaraman",
            "gender" => 1,
            "address" => "Jakarta Barat",
            "ck_settings_id" => null,
            "user_id" => 1,
        ];
        Employee::create($employee);
    }
}
