<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosaItem extends Model
{
    use HasFactory;
    protected $table = 'diagnosa_items';
    protected $primaryKey = 'id';
    protected $fillable = ['diagnosas_id', 'symptoms_id'];
    public function gejala()
    {
        return $this->belongsTo(Symptoms::class, 'symptoms_id');
    }
}
