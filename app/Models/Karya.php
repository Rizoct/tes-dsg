<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karya extends Model
{
    use HasFactory;

    protected $table = 'karya';
    protected $fillable = ['nama', 'kategori', 'pembuat', 'tahun_pembuatan', 'harga', 'keterangan', 'file'];
}

?>