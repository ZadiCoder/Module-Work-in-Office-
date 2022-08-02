<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provider;
class Bank extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Provider(){
        return $this->belongsTo(Provider::class);
    }
}
