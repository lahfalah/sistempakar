<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    protected $table = 'diagnosas';
    protected $primaryKey = 'id';
    protected $fillable = ['deseases_id'];

    public function penyakit()
    {
        return $this->belongsTo(Deseases::class, 'deseases_id');
    }
    public function item()
    {
        return $this->hasMany(DiagnosaItem::class, 'diagnosas_id');
    }
}
