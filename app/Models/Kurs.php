<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kurs extends Model
{
    use HasFactory;
    protected $table = 'kurs';
    protected $fillable = [
        'name',
    ];
    public function guruhs()
    {
        return $this->hasMany(Guruh::class,'kurs_id','id');
    }
}
