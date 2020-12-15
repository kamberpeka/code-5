<?php

namespace App\Models\Message;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use AttributesTrait,
        RelationsTrait;

    protected $fillable = [
        'name',
        'email',
        'message'
    ];
}