<?php

namespace App;

use App\Events\PostCreated;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'user_id',
    ];

    protected $dispatchesEvents = [
        'created' => PostCreated::class
    ];
}
