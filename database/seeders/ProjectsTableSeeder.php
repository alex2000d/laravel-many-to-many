<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $project =  new project();
            $project->name_project = $faker->sentence(3); 
            $project->slug = Str::slug($project->name_project, '-');
            $project->description = $faker->paragraph();  
            $project->name = 'Alessandro';  
            $project->surname = 'De_Marco';  
            $project->github = $faker->url();  
            
            $project->save();
         }
    }
}
