<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
    ];

    public static function generateSlug($name){
        return Str::slug($name, '-');
    }
    
    public function projects(){
        return $this->belongsToMany(Project::class, 'project_technology');
    }
}
