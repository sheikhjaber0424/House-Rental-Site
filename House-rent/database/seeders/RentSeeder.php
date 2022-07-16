<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rents')->insert([
            [
                'price'=>'BDT 60 Thousand',
                'address' => 'Gulshan 1, Gulshan, Dhaka',
                'category' => 'Apartment',
                'bedroom'=> '4',
                'bathroom'=> '3',
                'area'=> '2000 sqft',
                'gallery' =>'https://images1.apartments.com/i2/Mel4Hm5GU_A13jVZId0JNlaZaYgQpTgCahWJI-5laEc/116/elevate-chicago-il-primary-photo.jpg?p=1'
            ],
            [
                'price'=>'BDT 60 Thousand',
                'address' => 'Sector 10, Uttara, Dhaka',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'area'=> '2400 sqft',
                'gallery' =>'https://images1.apartments.com/i2/Qz0af-n9GB1I1leEoyF5owiU7zlV0ZzVw1acb0fUhj4/102/the-residences-at-newcity-chicago-il-primary-photo.jpg?p=1'
            ],
            [
                'price'=>'BDT 55 Thousand',
                'address' => 'Sector 4, Uttara, Dhaka',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'area'=> '2153 sqft',
                'gallery' =>'https://images1.apartments.com/i2/dR2wcxeSyitSwkn2EDYMyN43fGWICpjkpUJWOvMWCqI/102/regents-park-chicago-il-diningliving-room.jpg?p=1'
            ],
            [
                'price'=>'BDT 22 Thousand',
                'address' => 'Block I, Bashundhara R-A, Dhaka',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '2',
                'area'=> '1100 sqft',
                'gallery' =>'https://images1.apartments.com/i2/-A2JjzImZo9JspuJLIixmKikSxsQF6RZRIh-PyVuCR4/102/the-pavilion-chicago-il-primary-photo.jpg?p=1'
            ]
    

            
        ]);
    }
}
