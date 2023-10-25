<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Migration;
use faker\factory as facker;

class employeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = facker:: create();
        for($i = 1;$i<=10;$i++){
        $employeelist = new Migration();
        $employeelist->name = $faker->name;
        $employeelist->username = $faker->userName;
        $employeelist->password = $faker->password;
        $employeelist->phone = $faker->phoneNumber;
        $employeelist->email = $faker->email;
        $employeelist->save();
        }
    }

}
