<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deseases extends Model
{
    use HasFactory;
    protected $table = 'deseases';
    protected $primaryKey = 'id';
    protected $fillable = ['kodepenyakit', 'namapenyakit', 'obat'];
}
