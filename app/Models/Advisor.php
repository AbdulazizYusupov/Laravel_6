<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advisor extends Model
{
    use HasFactory;
    protected $table = 'advisors';
    protected $fillable = [
        'name',
        'fakultet_id'
    ];
    public function fakultets()
    {
        return $this->belongsTo(Fakultet::class,'id','fakultet_id');
    }
    public function guruhs()
    {
        return $this->hasMany(Guruh::class,'advisor_id','id');
    }
}
