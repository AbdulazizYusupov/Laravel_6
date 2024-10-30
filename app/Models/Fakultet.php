<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fakultet extends Model
{
    use HasFactory;
    protected $table = 'fakultets';
    protected $fillable = [
        'name',
        'university_id'
    ];
    public function university()
    {
        return $this->belongsTo(University::class,'id','university_id');
    }
    public function advisors()
    {
        return $this->hasMany(Advisor::class,'fakultet_id','id');
    }
}
