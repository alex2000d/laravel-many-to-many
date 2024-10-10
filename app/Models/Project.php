<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_project',
        'slug',
        'description',
        'name',
        'surname',
        'github',
        'image',
        'type_id',
    ];

   public static function generateSlug($name_project){
    return Str::slug($name_project, '-');
   }

   public function type(){
    return $this->belongsTo(Type::class);
}
}
