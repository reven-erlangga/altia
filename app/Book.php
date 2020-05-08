<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function borrowed() {
        return $this->belongsToMany(User::class, 'borrow_history');
    }
}
