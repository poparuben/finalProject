<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    
    //select table name
    protected $table='messages';
    
    protected $fillable=[
        'name','second_name','mail','message_content'
    ];
}
