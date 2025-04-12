<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductInfo extends Model
{
    use HasFactory;

    protected $table = 'product_info';


    protected $fillable = [
        'product_id',
        'file_size',
        'supported_play_modes',
        'number_of_players',
        'genre',
        'online_features',
        'system',
        'publisher',
        'developer',
        'supported_languages',
        'release_date',
        'esrb_rating',
    ];


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
