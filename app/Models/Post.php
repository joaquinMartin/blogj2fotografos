<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // los campos que no queremos que se rellenen por asignación masiva
    protected $guarded = ['id', 'created_at', 'updated_at'];
    
    //Relacion uno a muchos Post a User
    public function user(){
        return $this->belongsTo(User::class);
    }
    //Relacion uno a muchos Post Category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion Muchos a Muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'img');
    }
}
