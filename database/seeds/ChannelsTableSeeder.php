<?php

use App\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Laravel 6',
            'slug' => Str::slug('Laravel 6')
          ]);

          Channel::create([
            'name' => 'Django 2.2',
            'slug' => Str::slug('Django 2.2')
          ]);

          Channel::create([
            'name' => 'Angular 8',
            'slug' => Str::slug('Angular 8')
          ]);

          Channel::create([
            'name' => 'Node js',
            'slug' => Str::slug('Node js')
          ]);
    }
}
