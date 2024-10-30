<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guruh extends Model
{
    use HasFactory;
    protected $table = 'guruhs';
    protected $fillable = [
        'name',
        'advisor_id',
        'kurs_id'
    ];
    public function advisors()
    {
        return $this->belongsTo(Advisor::class,'id','advisor_id');
    }
    public function kurs()
    {
        return $this->belongsTo(Kurs::class,'id','kurs_id');
    }
    public function talabas()
    {
        return $this->hasMany(Talaba::class,'guruh_id','id');
    }
}
