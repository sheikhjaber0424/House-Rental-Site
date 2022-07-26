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
                'address' => 'Banani, Road-13, House-18, Dhaka',
                'category' => 'Apartment',
                'bedroom'=> '5',
                'bathroom'=> '3',
                'description' =>'If you are looking for a home within an affordable range then check this flat. Well fitted with gas, electricity and water supplies, this flat is ideal to move in for new inhabitants. After entering the flat, you will find ample rooms cited for your recessing time and also happy dine hour. The kitchen area is just close to the dining space which gives the impression of ample light and space to have a content cooking time. Well-fitted bathrooms with resilient fixtures as per your prerequisites. Lots of restaurants, shopping places and schools are nearby as well as parks so the neighborhood is great as well. ',
                'area'=> '2000 sqft',
                'phone'=>'01722626182',
                'gallery' =>'https://images1.apartments.com/i2/Mel4Hm5GU_A13jVZId0JNlaZaYgQpTgCahWJI-5laEc/116/elevate-chicago-il-primary-photo.jpg?p=1'
            ],
            [
                'price'=>'BDT 35 Thousand',
                'address' => 'Sector 10, Uttara, Dhaka',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'This beautiful apartment is standing on an area of 2000  Square Feet facing in the east is located in Uttara. The price for this apartment is BDT 35,000. The flat comes complete with 3 beds, 4 baths, drawing, dining room and a kitchen. Each washroom has got the fixtures installed with the high durability guarantee. All-time security, ample parking space are some other benefits worth mentioning for this flat.  ',
                'area'=> '2400 sqft',
                'phone'=>'01735526182',
                'gallery' =>'https://images1.apartments.com/i2/Qz0af-n9GB1I1leEoyF5owiU7zlV0ZzVw1acb0fUhj4/102/the-residences-at-newcity-chicago-il-primary-photo.jpg?p=1'
            ],
            [
                'price'=>'BDT 55 Thousand',
                'address' => 'Sector 4, Uttara, Dhaka',
                'category' => 'Apartment',
                'bedroom'=> '4',
                'bathroom'=> '3',
                'description'=>'In a very busy city like Dhaka, everyone trances to live in a good house to get along with all the stressful events of life. One of the prime locations like Uttara has got some of the properties which actually can make a property buyers decision making towards flat buying thoughtful. We bring you a beautiful and distinct flat. There are plenty of places nearby so going for recreational activities outside is an easy option to pick as well. ',
                'area'=> '2153 sqft',
                'phone'=>'01736609182',
                'gallery' =>'https://images1.apartments.com/i2/dR2wcxeSyitSwkn2EDYMyN43fGWICpjkpUJWOvMWCqI/102/regents-park-chicago-il-diningliving-room.jpg?p=1'
            ],
            [
                'price'=>'BDT 22 Thousand',
                'address' => 'Block I, Bashundhara R-A, Dhaka',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '2',
                'description'=>'A flat is vacant in the lively location of Bashundhara R-A right now. You can have your weekend guest at home without any doubt as having an ample space makes it enough roomy. Bathrooms are completed with durable fittings to give you a better living experience. The apartment is fit for inhabitants to move in right now. It is located in an area with several schools, shopping places and eateries, so outing will be quite enjoyable. Electricity, gas and water supply is readily available in the flat. ',
                'area'=> '1100 sqft',
                'phone'=>'01736676182',
                'gallery' =>'https://images1.apartments.com/i2/-A2JjzImZo9JspuJLIixmKikSxsQF6RZRIh-PyVuCR4/102/the-pavilion-chicago-il-primary-photo.jpg?p=1'
            ],

            [
                'price'=>'BDT 21 Thousand',
                'address' => 'Gulshan 2, Gulshan, Dhaka',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '2',
                'description'=>'The building holds one active and well-preserved elevators with a spacious staircase which leads the visitors of the unit welcoming with a nice looking wooden door. The combined drawing and dining area give you the first notion about the house to be one of the best-picked properties in Gulshan. All the washrooms are attached to fittings that are best regarding quality and persistence. The facing of this flat also makes sure that you get daylight throughout the day. ',
                'area'=> '1100 sqft',
                'phone'=>'01735426182',
                'gallery' =>'https://images1.apartments.com/i2/9dOJhhySDANEDKh03udfsyihaTcfLuI0PVBs7v76kw8/116/gild-chicago-il-kitchen-and-living-room-of-gild-gold-coa.png?p=1'
            ],
    
            [
                'price'=>'BDT 22 Thousand',
                'address' => 'Block I, Bashundhara R-A, Dhaka',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'',
                'area'=> '1100 sqft',
                'phone'=>'01736626182',
                'gallery' =>'https://images1.apartments.com/i2/vx1Q99d9xqn0k2nqQ7GgnV5f9IPw9j-lGUGokDK_Ujo/116/gild-chicago-il-rooftop-lounge-at-gild-gold-coast-apartm.png?p=1'
            ],
    
            [
                'price'=>'BDT 22 Thousand',
                'address' => 'Dhanmondi, Dhaka',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'This is a beautiful apartment and in the living space, you will find that there is a multi-colored brick pattern and the floor pattern is strikingly unique. There are three bedrooms and two of them have balconies attached. There is a drawing and a dining room and even though it is one space, it is quite an extensive one and you will find a comfortable amount of space. One of the bedrooms here does not have an attached balcony but it is quite spacious. You could use this as the guest room',
                'area'=> '12,00 sqft',
                'phone'=>'01736686182',
                'gallery' =>'https://images1.apartments.com/i2/bA-nT2UnE0MNBKjnVpuCMjIyvVEhRyv4EhNLoeKo7Uw/116/gild-chicago-il-elevator-vestibule-at-gild-gold-coast-ap.png?p=1'
            ],
            [
                'price'=>'BDT 45 Thousand',
                'address' => 'Block A, Bashundhara R-A, Dhaka',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'This is a beautiful apartment and in the living space, you will find that there is a multi-colored brick pattern and the floor pattern is strikingly unique. There are three bedrooms and two of them have balconies attached. There is a drawing and a dining room and even though it is one space, it is quite an extensive one and you will find a comfortable amount of space. One of the bedrooms here does not have an attached balcony but it is quite spacious. You could use this as the guest room',
                'area'=> '21,000 sqft',
                'phone'=>'01736656182',
                'gallery' =>'https://images1.apartments.com/i2/mPQROu5vkg56yw4Obw8-63jHgSyEq141-MhPL9RH5QE/116/gild-chicago-il-building-photo.jpg?p=1'
            ]
    

            
        ]);
    }
}
