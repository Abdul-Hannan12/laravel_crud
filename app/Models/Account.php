<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = "accounts";
    protected $primaryKey = "account_id";

    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    public function getBalanceAttribute($value){
        return "$ ".$value;
    }
}
