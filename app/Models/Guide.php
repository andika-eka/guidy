<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;
    protected $primaryKey = "user_id";
    protected $fillable = [
        'user_id',
        'name',
        'status',
        'best_review',
        'profile',
    ];
    
    public function ticket(){
        return $this->hasMany(Ticket::class,'ticket_id','user_id');
    }
    public function review(){
        return $this->hasMany(Review::class,'guide_id','user_id');
    }


}
