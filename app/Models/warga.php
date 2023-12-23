<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warga extends Model
{
    use HasFactory;
    protected $table = 'Warga';
    // protected $fillable = ['Nama', 'Gambar','Email', 'Instagram', 'Tiktok'];
    protected $guarded = [];
}
