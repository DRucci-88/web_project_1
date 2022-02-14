<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function accounts():BelongsTo
    {
        return $this->BelongsTo(Account::class);
    }
    public function ebooks()
    {
        return $this->BelongsTo(Ebook::class, 'ebook_id');
    }
}
