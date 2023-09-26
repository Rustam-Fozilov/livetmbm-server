<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Camera extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'region_id',
        'is_active',
    ];

    public array $translatable = ['name'];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
