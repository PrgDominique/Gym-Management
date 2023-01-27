<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'membership_expiration',
        'trainer_id',
        'membership_id',
    ];

    public function memberships()
    {
        return $this->belongsTo(Membership::class);
    }

    public function trainers()
    {
        return $this->belongsTo(Trainer::class);
    }
}
