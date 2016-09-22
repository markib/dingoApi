<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UsersTableSeeder::class);
        //delete users table records
        DB::table('users')->delete();
        //insert some dummy records
        DB::table('users')->insert(array(
            array('name'=>'john','email'=>'john@clivern.com','password'=>Hash::make('1234')),
            array('name'=>'mark','email'=>'mark@clivern.com','password'=>Hash::make('1234')),
            array('name'=>'Karl','email'=>'karl@clivern.com','password'=>Hash::make('1234')),
            array('name'=>'marl','email'=>'marl@clivern.com','password'=>Hash::make('1234')),
            array('name'=>'mary','email'=>'mary@clivern.com','password'=>Hash::make('1234')),
            array('name'=>'sels','email'=>'sels@clivern.com','password'=>Hash::make('1234')),
            array('name'=>'taylor','email'=>'taylor@clivern.com','password'=>Hash::make('1234')),

        ));
        Model::reguard();
    }
}
