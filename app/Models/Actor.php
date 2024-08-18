<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\BelongsToMany;
use Illuminate\Database\Eloquent\HasMany;

class Actor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'fname',
        'lname',
        'country',
    ];

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class);
    }

}
