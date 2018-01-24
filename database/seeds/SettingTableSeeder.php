<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\Setting::create([
        'site_name' => 'My Blog Site',
        'address' => 'Batam, Bengkong Harapan I',
        'contact_number' => '(0778) 451263)',
        'contact_email' => 'myblog@site.com',
      ]);
    }
}
