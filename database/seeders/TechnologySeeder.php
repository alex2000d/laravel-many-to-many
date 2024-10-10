<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\technology;
use Illuminate\Support\Str;
class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['HTML', 'CSS', 'Javascript', 'PHP','Laravel', 'Vuejs', 'Reactjs', 'Nodejs'];

        foreach ($technologies as $technology) {
            $new_technology = new technology(); 
            $new_technology->name = $technology; 
            $new_technology->slug = Str::slug($technology, '-'); 
            $new_technology->save(); 
        }
    }
}
