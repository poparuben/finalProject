<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable=[
        'client_id',
        'order_date',
        'id_adress',
        'total_price',
        'contact_phone',
        'mail'
    ];

    public $timestamps=false;
    
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    
    public function address()
    {
        return $this->belongsTo(Address::class, 'id_adress');
    }

   
    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }
}
