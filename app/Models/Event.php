<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title' , 'description' , 'start','end','lieu','tarif', 'user_id'] ;


    public function user() {

        return $this->belongsTo('App\Models\User');
}}