<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EmployeeManagerDepartment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employeeManagerDepartment=[
            ['dep_id'=>'2','man_id'=>'1','emp_id'=>'1'],
          
        ];
        DB::table('employee_manager_departments')->insert($employeeManagerDepartment);
    }
}
