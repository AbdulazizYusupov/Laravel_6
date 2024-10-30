<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Talaba extends Model
{
    use HasFactory;
    protected $table = 'talabas';
    protected $fillable = [
        'name',
        'guruh_id',
        'tel',
        'img',
        'manzil_id',
    ];
    public function guruhs()
    {
        return $this->belongsTo(Guruh::class,'id','guruh_id');
    }
    public function manzils()
    {
        return $this->belongsTo(Manzil::class,'id','manzil_id');
    }
}
