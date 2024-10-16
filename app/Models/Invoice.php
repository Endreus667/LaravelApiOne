<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';
    protected $fillable = [
        'description',
        'value',
        'address_id',
        'user_id'

    ];

    protected $hidden = [
        'user_id',
        'address_id'
    ];

    public function address() {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }

    // Relação com o modelo User
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    use HasFactory;
}
