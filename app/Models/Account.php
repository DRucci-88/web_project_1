<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    use HasFactory;

    protected $guarded=['id'];


    public function roles(): BelongsTo
    {
        return $this->BelongsTo(Role::class, 'role_id');
    }

    public function genders():BelongsTo
    {
        return $this->BelongsTo(Gender::class, 'gender_id');
    }
    public function orders(): HasMany
    {
        return $this->HasMany(Order::class);
    }
}


