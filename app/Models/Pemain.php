<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    use HasFactory;

    protected $guard =['id'];
    protected $fillable = ['pemain', 'umur', 'role', 'team_id', 'tanggal', ];
    public function kelas()
{
    return $this->belongsTo(kelas ::class,'team_id');
}

}
