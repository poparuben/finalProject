<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    //select table name
    protected $table='products';

    //rename defaul id col
    protected $primaryKey='product_id';

    protected $fillable=[
        'name','kg','price','catgory','photo','description'
    ];

    //disable timestamps
    public $timestamps=false;
}
