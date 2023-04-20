<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BonCommande extends Model
{
    use HasFactory;

    public function factures(): HasMany
    {
        return $this->hasMany(Facture::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }


    protected $fillable = [
        'client_id',
        'numero',
        'slug',
        'user_id',
        'ref',
        'created_at',
        'updated_at',
    ];
}
