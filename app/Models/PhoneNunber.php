<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNunber extends Model
{
    use HasFactory;

    protected $fillable = [
        'tel1',
        'tel2',        
    ];
    
    public function student(){
        
        return $this->belongsTo(Student::class);
    }
}
