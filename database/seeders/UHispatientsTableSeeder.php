<?php

namespace Database\Seeders;

use DateTime;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UHispatientsTableSeeder extends Seeder
{
    public function run(): void
    {
        $start_date = '2015-12-31 00:00:00';
        $end_date = '2010-01-01 00:00:00';
        $min = strtotime($start_date);
        $max = strtotime($end_date);

        for ($i = 1; $i <= 100; $i++) {
            $val = rand($min, $max);
            DB::table('u_hispatients')->insert([
                'COMPANY' => 'HIS',
                'BRANCH' => 'HO',
                'CODE' => 'PATIENT' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'NAME' => 'John Allen Doe',
                'U_LASTNAME' => 'Doe',
                'U_FIRSTNAME' => 'John',
                'U_MIDDLENAME' => 'Allen',
                'U_GENDER' => 'M',
                'U_BIRTHDATE' => new \DateTime(date('Y-m-d H:i:s', $val)),
                'U_ADDRESS' => '123 Main St',
                'U_CITY' => 'Cityville',
                'U_PROVINCE' => 'ProvinceX',
                'U_EMAIL' => 'john.doe@example.com',
                'U_MOBILENO' => '09171234567',
                'DATECREATED' => Carbon::now(),
                'CREATEDBY' => 'admin',
                'LASTUPDATED' => Carbon::now(),
                'LASTUPDATEDBY' => 'admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                // Other fields default to null or zero
            ]);
        }
    }
}
