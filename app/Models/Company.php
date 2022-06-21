<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'website', 'address'];
    //add table name 
    // protected $table = 'companies';
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
