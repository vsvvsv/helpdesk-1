<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}