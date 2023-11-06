<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            ['name' => 'Afrikaans'],
            ['name' => 'Albanian'],
            ['name' => 'Arabic'],
            ['name' => 'Armenian'],
            ['name' => 'Basque'],
            ['name' => 'Bengali'],
            ['name' => 'Bulgarian'],
            ['name' => 'Catalan'],
            ['name' => 'Cambodian'],
            ['name' => 'Chinese (Mandarin)'],
            ['name' => 'Croatian'],
            ['name' => 'Czech'],
            ['name' => 'Danish'],
            ['name' => 'Dutch'],
            ['name' => 'English'],
            ['name' => 'Estonian'],
            ['name' => 'Fiji'],
            ['name' => 'Finnish'],
            ['name' => 'French'],
            ['name' => 'Georgian'],
            ['name' => 'German'],
            ['name' => 'Greek'],
            ['name' => 'Gujarati'],
            ['name' => 'Hebrew'],
            ['name' => 'Hindi'],
            ['name' => 'Hungarian'],
            ['name' => 'Icelandic'],
            ['name' => 'Indonesian'],
            ['name' => 'Irish'],
            ['name' => 'Italian'],
            ['name' => 'Japanese'],
            ['name' => 'Javanese'],
            ['name' => 'Korean'],
            ['name' => 'Latin'],
            ['name' => 'Latvian'],
            ['name' => 'Lithuanian'],
            ['name' => 'Macedonian'],
            ['name' => 'Malay'],
            ['name' => 'Malayalam'],
            ['name' => 'Maltese'],
            ['name' => 'Maori'],
            ['name' => 'Marathi'],
            ['name' => 'Mongolian'],
            ['name' => 'Nepali'],
            ['name' => 'Norwegian'],
            ['name' => 'Persian'],
            ['name' => 'Polish'],
            ['name' => 'Portuguese'],
            ['name' => 'Punjabi'],
            ['name' => 'Quechua'],
            ['name' => 'Romanian'],
            ['name' => 'Russian'],
            ['name' => 'Samoan'],
            ['name' => 'Serbian'],
            ['name' => 'Slovak'],
            ['name' => 'Slovenian'],
            ['name' => 'Spanish'],
            ['name' => 'Swahili'],
            ['name' => 'Swedish'],
            ['name' => 'Tamil'],
            ['name' => 'Tatar'],
            ['name' => 'Telugu'],
            ['name' => 'Thai'],
            ['name' => 'Tibetan'],
            ['name' => 'Tonga'],
            ['name' => 'Turkish'],
            ['name' => 'Ukrainian'],
            ['name' => 'Urdu'],
            ['name' => 'Uzbek'],
            ['name' => 'Vietnamese'],
            ['name' => 'Welsh'],
            ['name' => 'Xhosa'],
        ];

        Language::insert($languages);
    }
}
