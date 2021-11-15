<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function setTitleAttribute($value)
    {
        $this->attributes['title']= $value;
        $this->attributes['slug']= Str::slug($value);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getUrl(){
        return url("entries/$this->slug-$this->id");
    }
}
