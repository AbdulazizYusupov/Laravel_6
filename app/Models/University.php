<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $table = 'universities';
    protected $fillable = [
        'name',
    ];
    public function fakultets()
    {
        return $this->hasMany(Fakultet::class,'university_id','id');
    }
}
