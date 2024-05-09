<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'addresses';

    /**
     * Atributele care pot fi umplute în mod masiv.
     *
     * @var array
     */
    protected $fillable = [
        'street',
        'number',
        'city',
        'zip_code',
    ];

    /**
     * Atributul cheii primare al modelului.
     *
     * @var string
     */
    protected $primaryKey = 'id_address';

    /**
     * Indicație dacă trebuie să se facă marcaje de timp pentru model.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Obține comenzile care au această adresă.
     */
    public function orders()
    {
        return $this->hasMany(Orders::class, 'id_adress');
    }
}
