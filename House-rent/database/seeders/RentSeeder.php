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
                'city' => 'Dhaka',
                'address' => 'Banani, Road-13, House-18, Dhaka',
                'region' => 'Banani',
                'category' => 'Apartment',
                'bedroom'=> '5',
                'bathroom'=> '3',
                'description' =>'If you are looking for a home within an affordable range then check this flat. Well fitted with gas, electricity and water supplies, this flat is ideal to move in for new inhabitants. After entering the flat, you will find ample rooms cited for your recessing time and also happy dine hour. The kitchen area is just close to the dining space which gives the impression of ample light and space to have a content cooking time. Well-fitted bathrooms with resilient fixtures as per your prerequisites. Lots of restaurants, shopping places and schools are nearby as well as parks so the neighborhood is great as well. ',
                'area'=> '2400 sqft',
                'phone'=>'01722626182',
                'gallery' =>'https://images1.apartments.com/i2/Mel4Hm5GU_A13jVZId0JNlaZaYgQpTgCahWJI-5laEc/116/elevate-chicago-il-primary-photo.jpg?p=1',
                'status' =>'Up for rent'
            ],
            [
                'price'=>'BDT 55 Thousand',
                'city' => 'Dhaka',
                'address' => 'Sector 10, Uttara, Dhaka',
                'region' => 'Uttara',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'This beautiful apartment is standing on an area of 2000  Square Feet facing in the east is located in Uttara. The price for this apartment is BDT 35,000. The flat comes complete with 3 beds, 3 baths, drawing, dining room and a kitchen. Each washroom has got the fixtures installed with the high durability guarantee. All-time security, ample parking space are some other benefits worth mentioning for this flat.  ',
                'area'=> '2000 sqft',
                'phone'=>'01735526182',
                'gallery' =>'https://images1.apartments.com/i2/Qz0af-n9GB1I1leEoyF5owiU7zlV0ZzVw1acb0fUhj4/102/the-residences-at-newcity-chicago-il-primary-photo.jpg?p=1',
                'status' =>'Up for rent'
            ],
            [
                'price'=>'BDT 55 Thousand',
                'city' => 'Dhaka',
                'address' => 'Sector 4, Uttara, Dhaka',
                'region' => 'Uttara',
                'category' => 'Apartment',
                'bedroom'=> '4',
                'bathroom'=> '3',
                'description'=>'In a very busy city like Dhaka, everyone trances to live in a good house to get along with all the stressful events of life. One of the prime locations like Uttara has got some of the properties which actually can make a property buyers decision making towards flat buying thoughtful. We bring you a beautiful and distinct flat. There are plenty of places nearby so going for recreational activities outside is an easy option to pick as well. ',
                'area'=> '2153 sqft',
                'phone'=>'01736609182',
                'gallery' =>'https://images1.apartments.com/i2/dR2wcxeSyitSwkn2EDYMyN43fGWICpjkpUJWOvMWCqI/102/regents-park-chicago-il-diningliving-room.jpg?p=1',
                'status' =>'Up for rent'
            ],
         
            [
                'price'=>'BDT 22 Thousand',
                'city' => 'Dhaka',
                'address' => 'Block I, Bashundhara R-A, Dhaka',
                'region' => 'Bashundhara',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '2',
                'description'=>'A flat is vacant in the lively location of Bashundhara R-A right now. You can have your weekend guest at home without any doubt as having an ample space makes it enough roomy. Bathrooms are completed with durable fittings to give you a better living experience. The apartment is fit for inhabitants to move in right now. It is located in an area with several schools, shopping places and eateries, so outing will be quite enjoyable. Electricity, gas and water supply is readily available in the flat. ',
                'area'=> '1100 sqft',
                'phone'=>'01736676182',
                'gallery' =>'https://images1.apartments.com/i2/-A2JjzImZo9JspuJLIixmKikSxsQF6RZRIh-PyVuCR4/102/the-pavilion-chicago-il-primary-photo.jpg?p=1',
                'status' =>'Up for rent'
            ],

            [
                'price'=>'BDT 21 Thousand',
                'city' => 'Dhaka',
                'address' => 'Gulshan 2, Gulshan, Dhaka',
                'region' => 'Gulshan',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '2',
                'description'=>'The building holds one active and well-preserved elevators with a spacious staircase which leads the visitors of the unit welcoming with a nice looking wooden door. The combined drawing and dining area give you the first notion about the house to be one of the best-picked properties in Gulshan. All the washrooms are attached to fittings that are best regarding quality and persistence. The facing of this flat also makes sure that you get daylight throughout the day. ',
                'area'=> '1100 sqft',
                'phone'=>'01735426182',
                'gallery' =>'https://images1.apartments.com/i2/9dOJhhySDANEDKh03udfsyihaTcfLuI0PVBs7v76kw8/116/gild-chicago-il-kitchen-and-living-room-of-gild-gold-coa.png?p=1',
                'status' =>'Up for rent'
            ],
    
            [
                'price'=>'BDT 22 Thousand',
                'city' => 'Dhaka',
                'address' => 'Block I, Bashundhara R-A, Dhaka',
                'region' => 'Bashundhara',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'',
                'area'=> '1100 sqft',
                'phone'=>'01736626182',
                'gallery' =>'https://images1.apartments.com/i2/vx1Q99d9xqn0k2nqQ7GgnV5f9IPw9j-lGUGokDK_Ujo/116/gild-chicago-il-rooftop-lounge-at-gild-gold-coast-apartm.png?p=1',
                'status' =>'Up for rent'
            ],
    
            [
                'price'=>'BDT 22 Thousand',
                'city' => 'Dhaka',
                'address' => 'Baridhara, Dhaka',
                'region' =>'Baridhara',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'This is a beautiful apartment and in the living space, you will find that there is a multi-colored brick pattern and the floor pattern is strikingly unique. There are three bedrooms and two of them have balconies attached. There is a drawing and a dining room and even though it is one space, it is quite an extensive one and you will find a comfortable amount of space. One of the bedrooms here does not have an attached balcony but it is quite spacious. You could use this as the guest room',
                'area'=> '1200 sqft',
                'phone'=>'01736686182',
                'gallery' =>'https://images1.apartments.com/i2/bA-nT2UnE0MNBKjnVpuCMjIyvVEhRyv4EhNLoeKo7Uw/116/gild-chicago-il-elevator-vestibule-at-gild-gold-coast-ap.png?p=1',
                'status' =>'Up for rent'
            ],
            [
                'price'=>'BDT 18 Thousand',
                'city' => 'Barisal',
                'address' => 'Block A, Rayapur , Barisal',
                'region' =>'Rayapur',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'This is a beautiful apartment and in the living space, you will find that there is a multi-colored brick pattern and the floor pattern is strikingly unique. There are three bedrooms and two of them have balconies attached. There is a drawing and a dining room and even though it is one space, it is quite an extensive one and you will find a comfortable amount of space. One of the bedrooms here does not have an attached balcony but it is quite spacious. You could use this as the guest room',
                'area'=> '1200 sqft',
                'phone'=>'01736656182',
                'gallery' =>'https://images1.apartments.com/i2/mPQROu5vkg56yw4Obw8-63jHgSyEq141-MhPL9RH5QE/116/gild-chicago-il-building-photo.jpg?p=1',
                'status' =>'Up for rent'
            ],
           
            [
                'price'=>'BDT 18 Thousand',
                'city' => 'Chittagong',
                'address' => 'Bayazid, Chittagong',
                'region' =>'Bayazid',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'We are here to serve you if you are thinking of starting a residence in an easy-going area like Bayazid. Bayazid is offering a flat for rent to pick it for your next home. A good amount of school, college and groceries will be located right nearby to your home. It also features nice balcony, drawing, dining and a kitchen. All-time electricity backup with updated apartment fittings will make your life smooth. ',
                'area'=> '1200 sqft',
                'phone'=>'01326126182',
                'gallery' =>'https://images1.apartments.com/i2/BfHDwjwH-lKLWlZJXyV9rw1ZaDHIZOgyp5E-pNURQbo/116/cityfront-place-chicago-il-building-photo.jpg?p=1',
                'status' =>'Up for rent'
            ],
            [
                'price'=>'BDT 80 Thousand',
                'city' => 'Chittagong',
                'address' => 'Khulshi Hill R/A, North Khulshi, Khulshi, Chittagong',
                'region' =>'Khulshi',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '4',
                'description'=>'We are here to serve you if you are thinking of starting a residence in an easy-going area like Bayazid. Bayazid is offering a flat for rent to pick it for your next home. A good amount of school, college and groceries will be located right nearby to your home. It also features nice balcony, drawing, dining and a kitchen. All-time electricity backup with updated apartment fittings will make your life smooth. ',
                'area'=> '2400 sqft',
                'phone'=>'01626126242',
                'gallery' =>'https://images1.apartments.com/i2/I8_DzYv9xMl30KFgbP0hyk7ZoveQ44AmXZYCavPEGxE/116/chestnut-tower-apartments-chicago-il-building-photo.jpg?p=1',
                'status' =>'Up for rent'
            ],
            [
                'price'=>'BDT 20 Thousand',
                'city' => 'Sylhet',
                'address' => 'Kajal Shah, Sylhet',
                'region' =>'Kajal Shah',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'This is a great place to reside in, having an area with a good number of shopping places and schools. The apartment is cozy and all utility supplies readily accessible. Serene and fortified living has become a must when it comes to securing a permanent address in a busy city like Dhaka. So we suggest you see this flat by yourself. We hope it will make sure you are gratified with the home that has always been pictured in your mind. ',
                'area'=> '1400 sqft',
                'phone'=>'01626123343',
                'gallery' =>'https://images1.apartments.com/i2/NSqnANcUMTqg23QmIfng7uvnZVgHTwcde5UCI40u-Ww/111/gateway-west-loop-chicago-il-primary-photo.jpg?p=1',
                'status' =>'Up for rent'
            ],
            [
                'price'=>'BDT 21 Thousand',
                'city' => 'Rajshahi',
                'address' => 'Adabor, Rajshahi',
                'region' =>'Adabor',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'This is a great place to reside in, having an area with a good number of shopping places and schools. The apartment is cozy and all utility supplies readily accessible. Serene and fortified living has become a must when it comes to securing a permanent address in a busy city like Dhaka. So we suggest you see this flat by yourself. We hope it will make sure you are gratified with the home that has always been pictured in your mind. ',
                'area'=> '1300 sqft',
                'phone'=>'01316123343',
                'gallery' =>'https://images1.apartments.com/i2/EEWiuo_nMVPV3XI468DRqFze_1Nvr1s7IGa87NS-NfM/111/coeval-chicago-il-primary-photo.jpg?p=1',
                'status' =>'Up for rent'
            ],
            [
                'price'=>'BDT 25 Thousand',
                'city' => 'Khulna',
                'address' => 'Nabinpur, Khulna',
                'region' =>'Nabinpur',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'We are here to serve you if you are thinking of starting a residence in an easy-going area like Bayazid. Bayazid is offering a flat for rent to pick it for your next home. A good amount of school, college and groceries will be located right nearby to your home. It also features nice balcony, drawing, dining and a kitchen. All-time electricity backup with updated apartment fittings will make your life smooth.',
                'area'=> '1400 sqft',
                'phone'=>'01736123343',
                'gallery' =>'https://images1.apartments.com/i2/ugkY_a-bYh3dRGcArit-PVrswFSdBQwbLf7E-pNaogs/111/amli-808-chicago-il-808interiorkitchen-3.jpg?p=1',
                'status' =>'Up for rent'
            ],
            [
                'price'=>'BDT 30 Thousand',
                'city' => 'Rangpur',
                'address' => 'Chandgaon, Rangpur',
                'region' =>'Shahbagh',
                'category' => 'Apartment',
                'bedroom'=> '4',
                'bathroom'=> '3',
                'description'=>'This wonderful flat covers an area of is situated in this notable building that you can see in our enlisted image. It can be a perfect home for your family which comes within your affordability. All the rooms are well spacious and lets you have the whole feel of solace and calmness with closed ones. This nice apartment is surely a reasonable deal for you comparing to the area the home is situated. The locality has a wide variety of schools, colleges, Universities, hospitals and shops.',
                'area'=> '1800 sqft',
                'phone'=>'01316123343',
                'gallery' =>'https://images1.apartments.com/i2/YOazk66yM66xujbrgAJbR460YgXfcjk86b2urgO5adM/116/amli-808-chicago-il-808interiorkitchen-2.jpg?p=1',
                'status' =>'Up for rent'
            ],
            [
                'price'=>'BDT 25 Thousand',
                'city' => 'Mymensingh',
                'address' => 'Birgaon, Mymensingh',
                'region' =>'Birgaon',
                'category' => 'Apartment',
                'bedroom'=> '3',
                'bathroom'=> '3',
                'description'=>'This is a great place to reside in, having an area with a good number of shopping places and schools. The apartment is cozy and all utility supplies readily accessible. Serene and fortified living has become a must when it comes to securing a permanent address in a busy city like Dhaka. So we suggest you see this flat by yourself. We hope it will make sure you are gratified with the home that has always been pictured in your mind.',
                'area'=> '1500 sqft',
                'phone'=>'01322123343',
                'gallery' =>'https://images1.apartments.com/i2/iCoD-ZUlNtSA7gwGPu43ahdK8LyC--xy8iL2--bpG6U/111/river-west-lofts-chicago-il-502-1-bed-plus-den.jpg?p=1',
                'status' =>'Up for rent'
            ],
               
        ]);
    }
}
