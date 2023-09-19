<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'cardTitle',
        'amount',
        'product_id'
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
