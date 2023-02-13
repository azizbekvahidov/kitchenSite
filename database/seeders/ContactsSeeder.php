<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Contact::query()->truncate();
        Contact::query()->create([
            'site_name_uz' => 'Ошхона',
            'site_name_ru' => 'Кухня',
            'site_name_en' => 'Kitchen',
            'address_uz' => '21010 Navoiy, Uzbekiston',
            'address_ru' => '21010 Наваи, Узбекистан',
            'address_en' => '21010 Navoi, Uzbekistan',
            'phone' => '+1 (579) 291-1847',
            'email' => 'info@kitchen.com',
            'map_link' => 'https://www.google.com/maps',
            'facebook' => 'https://www.facebook.com',
            'telegram' => 'https://telegram.org',
            'instagram' => 'https://www.instagram.com',
        ]);
    }
}
