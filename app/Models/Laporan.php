<?php

namespace App\Models;

use App\Models\Diagnosa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;
    protected $fillable = ['diagnosas_id', 'user_id'];
    public function diagnosa()
    {
        return $this->hasOne(Diagnosa::class, 'id', 'diagnosas_id');
    }
}
