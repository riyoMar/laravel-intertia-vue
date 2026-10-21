<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'contact_name' => 'Facebook',
            'contact_link' => 'https://www.facebook.com',
            'contact_icon' => 'bi-facebook'
        ]);

        Contact::create([
            'contact_name' => 'Twitter',
            'contact_link' => 'https://www.twitter.com',
            'contact_icon' => 'bi-twitter-x'
        ]);

        Contact::create([
            'contact_name' => 'Instagram',
            'contact_link' => 'https://www.instagram.com',
            'contact_icon' => 'bi-instagram'
        ]);

    // changed
        Contact::create([
            'contact_name' => 'WhatsApp',
            'contact_link' => '081250297676',
            'contact_icon' => 'bi-whatsapp'
        ]);
    }
}
