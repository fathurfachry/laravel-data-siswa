<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'info',
        'info_lanjutan'
    ];

    protected $table = 'siswa';

    public function scopeSelectById($query, $id) {

        return $query->where('id', $id);

    }
}
