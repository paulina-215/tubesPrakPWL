<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resep extends Model
{
    use HasFactory;
    protected $table = 'reseps'; // Jika tidak di tulis dia akan mengambil table, berdasarkan nama plural dari Modelnya. Task -> task's'
    protected $primaryKey = 'id'; // Jika tidak di tulis dia akan mengambil 'id',
    public $timestamps = false; // Jika tidak ditulis dia akan mengisikan column 'created_at' dan 'updated_at' pada table kita.

    protected $fillable = [
        'tanggal',
        'nama_resep',
        'resep',
        'gambar'
    ]; // Jika tidak di tulis dia tidak akan memperbolehkan kita untuk mengisi data dari model ke database pada kolom tanggal dan task.

    public function tambahResep($id ,$tanggal, $nama_resep, $resep, $gambar){
        $this->id=  $id;
        $this->tanggal= $tanggal;
        $this->nama_resep= $nama_resep;
        $this->resep= $resep;
        $this->gambar= $gambar;
        $this->save();
    }   

    public function comments()
    {
        return $this->hasMany(Comment::class, 'resep_id');
    }
}
