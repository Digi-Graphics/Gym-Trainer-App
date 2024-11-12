<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone'];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}