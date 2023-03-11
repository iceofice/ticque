<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'status',
    ];

    /**
     * Get the gorup that the ticket is in.
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
