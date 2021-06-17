<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Penulis extends Model
{
    use HasFactory;

    protected $table = 'penulis';

    public function berita()
    {
        return $this->hasMany(Buku::class);
    }
}
