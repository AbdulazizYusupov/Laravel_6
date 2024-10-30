<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manzil extends Model
{
    use HasFactory;
    protected $table = 'manzils';
    protected $fillable = [
        'name',
    ];
    public function talabas()
    {
        return $this->hasMany(Talaba::class,'manzil_id','id');
    }
}
