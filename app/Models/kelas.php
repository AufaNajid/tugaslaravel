<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $guard =['id'];
    protected $fillable = ['nama', 'created_at', 'updated_at' ];

    public function pemain()
    {
        return $this->hasMany(Pemain::class);
    }
}
