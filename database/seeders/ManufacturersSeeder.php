<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacturers = array(
            array('manufacturer' => 'Acura'),
            array('manufacturer' => 'Alfa Romeo'),
            array('manufacturer' => 'AMC'),
            array('manufacturer' => 'Aston Martin'),
            array('manufacturer' => 'Audi'),
            array('manufacturer' => 'Avanti'),
            array('manufacturer' => 'Bentley'),
            array('manufacturer' => 'BMW'),
            array('manufacturer' => 'Buick'),
            array('manufacturer' => 'Cadillac'),
            array('manufacturer' => 'Chevrolet'),
            array('manufacturer' => 'Chrysler'),
            array('manufacturer' => 'Daewoo'),
            array('manufacturer' => 'Daihatsu'),
            array('manufacturer' => 'Datsun'),
            array('manufacturer' => 'DeLorean'),
            array('manufacturer' => 'Dodge'),
            array('manufacturer' => 'Eagle'),
            array('manufacturer' => 'Ferrari'),
            array('manufacturer' => 'FIAT'),
            array('manufacturer' => 'Fisker'),
            array('manufacturer' => 'Ford'),
            array('manufacturer' => 'Freightliner'),
            array('manufacturer' => 'Geo'),
            array('manufacturer' => 'GMC'),
            array('manufacturer' => 'Honda'),
            array('manufacturer' => 'HUMMER'),
            array('manufacturer' => 'Hyundai'),
            array('manufacturer' => 'Infiniti'),
            array('manufacturer' => 'Isuzu'),
            array('manufacturer' => 'Jaguar'),
            array('manufacturer' => 'Jeep'),
            array('manufacturer' => 'Kia'),
            array('manufacturer' => 'Lamborghini'),
            array('manufacturer' => 'Lancia'),
            array('manufacturer' => 'Land Rover'),
            array('manufacturer' => 'Lexus'),
            array('manufacturer' => 'Lincoln'),
            array('manufacturer' => 'Lotus'),
            array('manufacturer' => 'Maserati'),
            array('manufacturer' => 'Maybach'),
            array('manufacturer' => 'Mazda'),
            array('manufacturer' => 'McLaren'),
            array('manufacturer' => 'Mercedes-Benz'),
            array('manufacturer' => 'Mercury'),
            array('manufacturer' => 'Merkur'),
            array('manufacturer' => 'MINI'),
            array('manufacturer' => 'Mitsubishi'),
            array('manufacturer' => 'Nissan'),
            array('manufacturer' => 'Oldsmobile'),
            array('manufacturer' => 'Peugeot'),
            array('manufacturer' => 'Plymouth'),
            array('manufacturer' => 'Pontiac'),
            array('manufacturer' => 'Porsche'),
            array('manufacturer' => 'RAM'),
            array('manufacturer' => 'Renault'),
            array('manufacturer' => 'Rolls-Royce'),
            array('manufacturer' => 'Saab'),
            array('manufacturer' => 'Saturn'),
            array('manufacturer' => 'Scion'),
            array('manufacturer' => 'smart'),
            array('manufacturer' => 'SRT'),
            array('manufacturer' => 'Sterling'),
            array('manufacturer' => 'Subaru'),
            array('manufacturer' => 'Suzuki'),
            array('manufacturer' => 'Tesla'),
            array('manufacturer' => 'Toyota'),
            array('manufacturer' => 'Triumph'),
            array('manufacturer' => 'Volkswagen'),
            array('manufacturer' => 'Volvo'),
            array('manufacturer' => 'Yugo'),
        );

        DB::table('manufacturers')->insert($manufacturers);
    }
}
