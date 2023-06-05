<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'short',
    //     'original',
    //     'user_id',
    // ];

    protected $guarded = ['id'];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
