<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserInvite extends Model
{
    use HasFactory, HasUuids;

    const STATUS_PENDING = 'pending';
    const STATUS_ACCEPTED = 'accepted';

    protected $fillable = [
        'email',
        'invite_code',
        'invite_status',
        'invited_by',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
