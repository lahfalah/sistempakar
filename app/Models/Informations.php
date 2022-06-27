<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informations extends Model
{
    use HasFactory;
    protected $table='informations';
    protected $primaryKey='id';
    protected $fillable=[
        'judul',
        'isi'
    ];
}
