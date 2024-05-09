<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    /**
     * Numele tabelului asociat modelului.
     *
     * @var string
     */
    protected $table = 'order_items';

    /**
     * Atributele care pot fi umplute în mod masiv.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'product_id',
    ];

    /**
     * Atributul cheii primare al modelului.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicație dacă trebuie să se facă marcaje de timp pentru model.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Obține comanda căreia îi aparține acest element de comandă.
     */
    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }

    /**
     * Obține produsul asociat acestui element de comandă.
     */
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
