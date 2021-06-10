<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'id'=>1,
            'page_name' => 'Home',
            'section_name' => 'Slider 1',
            'content' => '{"title":"asdf","description":"asdf","image":"setting\/sliders\/1623050165.png","button1_title":"asdf","button1_link":"www.google.com","button2_title":"fdas","button2_link":"www.google.com","status":null}',
            'status'=>1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('general_settings')->insert([
            'id'=>2,
            'page_name' => 'Home',
            'section_name' => 'Slider 2',
            'content' => '{"title":"asdf","description":"asdf","image":"setting\/sliders\/1623050165.png","button1_title":"asdf","button1_link":"www.google.com","button2_title":"fdas","button2_link":"www.google.com","status":null}',
            'status'=>1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('general_settings')->insert([
            'id'=>3,
            'page_name' => 'Home',
            'section_name' => 'Slider 3',
            'content' => '{"title":"asdf","description":"asdf","image":"setting\/sliders\/1623050165.png","button1_title":"asdf","button1_link":"www.google.com","button2_title":"fdas","button2_link":"www.google.com","status":null}',
            'status'=>1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('general_settings')->insert([
            'id'=>4,
            'page_name' => 'Home',
            'section_name' => 'Slider 4',
            'content' => '{"title":"asdf","description":"asdf","image":"setting\/sliders\/1623050165.png","button1_title":"asdf","button1_link":"www.google.com","button2_title":"fdas","button2_link":"www.google.com","status":null}',
            'status'=>1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('general_settings')->insert([
            'id'=>5,
            'page_name' => 'Home',
            'section_name' => 'Card 1',
            'content' => '{"icon":"setting\/card\/1623054463.png","title":"asdf","description":"asdf","status":"on"}',
            'status'=>1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('general_settings')->insert([
            'id'=>6,
            'page_name' => 'Home',
            'section_name' => 'Card 2',
            'content' => '{"icon":"setting\/card\/1623054463.png","title":"asdf","description":"asdf","status":"on"}',
            'status'=>1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('general_settings')->insert([
            'id'=>7,
            'page_name' => 'Home',
            'section_name' => 'Card 3',
            'content' => '{"icon":"setting\/card\/1623054463.png","title":"asdf","description":"asdf","status":"on"}',
            'status'=>1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('general_settings')->insert([
            'id'=>8,
            'page_name' => 'Home',
            'section_name' => 'Card 4',
            'content' => '{"icon":"setting\/card\/1623054463.png","title":"asdf","description":"asdf","status":"on"}',
            'status'=>1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('general_settings')->insert([
            'id'=>9,
            'page_name' => 'About',
            'section_name' => 'Banner',
            'content' => '{"title":"Maid","tagline":"sss","banner_image":"setting\/about\/1623052993.jpg"}',
            'status'=>1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('general_settings')->insert([
            'id'=>10,
            'page_name' => 'About',
            'section_name' => 'Body',
            'content' => '{"title":"Maid","details":"asdfasdfasdf","body_image":"setting\/about\/1623056470.jpg"}',
            'status'=>1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('general_settings')->insert([
            'id'=>11,
            'page_name' => 'F.A.Q.',
            'section_name' => 'Banner',
            'content' => '{"image":"setting\/faq\/","title":"asdf","details":"asdf"}',
            'status'=>1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);

        Role::create(['name' => 'customer']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'driver']);


        $user=User::create([
            'name' => 'driver',
            'password' => bcrypt(1234),
            'email' => 'driver@gmail.com',
            'phone'=>'111',
        ]);
//        $user=User::where('email','driver@gmail.com')->first();
        $user->assignRole('driver');


        $user=User::create([
            'name' => 'customer',
            'password' => bcrypt(1234),
            'email' => 'customer@gmail.com',
            'phone'=>'111',
        ]);
        $user->assignRole('customer')  ;


        $user=User::create([
            'name' => 'admin',
            'password' => bcrypt(1234),
            'email' => 'admin@gmail.com',
            'phone'=>'111',
        ]);
        $user->assignRole('admin');


        DB::table('shipment_package_types')->insert([
            'name' => 'Medium Package',
        ]);

        DB::table('shipment_package_types')->insert([
            'name' => 'Large Package',
        ]);



    }
}
