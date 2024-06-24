<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'deadline',
    ];

    public function scopeSearch(Builder $query, ?string $search = null): Builder
    {
        return $query->when(
            $search,
            fn (Builder $query, string $search) => $query->where('name', 'like', "%$search%")
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
