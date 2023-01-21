<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';
    protected $fillable = [
        'phoneNumber',
        'civilId',
        'address',
        'specialty',
        'userId',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'userId');
    }
}
