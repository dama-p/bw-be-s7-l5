<?php

namespace App\Models;

use App\Models\Slot;
use App\Models\Activity;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;
    public function slot(): BelongsTo
    {
        return $this->belongsTo(Slot::class);
    }
    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }


    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
