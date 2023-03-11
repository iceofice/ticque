<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'estimated_seconds',
        'prefix',
        'corporation_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'estimated_seconds' => 'integer',
    ];

    /**
     * Get the corporation that owns the group.
     */
    public function corporation(): BelongsTo
    {
        return $this->belongsTo(Corporation::class);
    }

    /**
     * Get all of the tickets for the group.
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
