<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        Page::create([
            'title' => 'Меню',
            'slug' => 'menu',
            'content' => '<h2>Тестовая запись/h2><p>Воооот.</p>',
            'is_published' => true,
        ]);

        Page::create([
            'title' => 'Контакты',
            'slug' => 'contacts',
            'content' => '<h2>Наши контакты</h2><p>Адрес: ул. Какая-то, 123</p><p>Телефон: +88005553535</p>',
            'is_published' => true,
        ]);
    }
}