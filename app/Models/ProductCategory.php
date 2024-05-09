<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;


    //select table name
    protected $table='product_category';
    
    //rename defaul id col
    protected $primaryKey='category_id';

    // protected $fillable=[
    //     'name_category'
    // ];


    //disable timestamps
    public $timestamps=false;
}

