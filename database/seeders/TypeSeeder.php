<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeNames = ['Frontend Development', 'Backend Development', 'Full-Stack Development', 'Mobile App Development', 'UI/UX Design'];

        foreach ($typeNames as $name) {
            $type = new Type(); 
            $type->name = $name; 
            $type->slug = Str::slug($name, '-'); 
            $type->save(); 
        }
    }
}
