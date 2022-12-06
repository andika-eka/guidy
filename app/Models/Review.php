<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $primaryKey = "review_id";
    protected $fillable = [
        'review_id',
        'guide_id',
        'name',
        'email',
        "user_id",
        "rating",
        "content",
    ];
    
}
