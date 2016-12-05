<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title' , 'description' , 'start' , 'end' , 'location' , 'price' , 'user_id'] ;


    public function user() {

        return $this->belongsTo('App\Models\User');
}}
