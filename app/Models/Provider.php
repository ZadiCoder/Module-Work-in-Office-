<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bank;
class Provider extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Bank(){
        return $this->hasOne(Bank::class);
    }
}
