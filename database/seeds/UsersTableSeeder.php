<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
          'name' => 'Rudi Lee',
          'email' => 'rudi@lee.me',
          'password' => bcrypt('password'),
          'admin' => 1
        ]);

        App\Profile::create([
          'user_id' => $user->id,
          'avatar' => 'uploads/avatar/avatar1.jpg',
          'about' => 'Bacon ipsum dolor amet kevin brisket tongue cow shoulder pork pastrami chicken swine ham hock shankle. Fatback buffalo beef rump boudin flank chicken corned beef. Shankle pancetta short loin.',
          'facebook' => 'facebook.com',
          'youtube' => 'youtube.com'
        ]);
    }
}
