<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Doctorinformation extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function doctor()
     {
        return $this->belongsTo(hospitalname::class);
     }
}
