<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'Roman Shrestha',
            'email' => 'roman@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id

        ]);

        // Listing::create(
        //     [
        //         'title' => 'Laravel Senior Developer',
        //         'tags' => 'Laravel, javascript',
        //         'company' => 'Acme Corp',
        //         'location' => 'Boston, MA',
        //         'email' => 'email@email.com',
        //         'website' => 'https://www.acme.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis saepe, ad dolor placeat iste consequuntur libero sint alias odit possimus non voluptatibus quia, eveniet provident accusantium, doloribus est iusto aut?'

        //     ]
        // );


        // Listing::create(
        //     [
        //         'title' => 'Full-Stack Developer',
        //         'tags' => 'Laravel, bacakend, api',
        //         'company' => 'Stark Industries',
        //         'location' => 'New York, NY',
        //         'email' => 'email2@email.com',
        //         'website' => 'https://www.starkindustries.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis saepe, ad dolor placeat iste consequuntur libero sint alias odit possimus non voluptatibus quia, eveniet provident accusantium, doloribus est iusto aut?'
        //     ]
        // );
    }
}
