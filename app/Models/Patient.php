<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'doctors';
    protected $fillable = [
        'phoneNumber',
        'address',
        'userId',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'userId');
    }
}
