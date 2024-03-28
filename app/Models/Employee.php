<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'salary'];

    public function setSalaryAttribute($value)
    {
        $this->attributes['salary'] = encrypt($value); // Encrypt the salary before storing
    }

    public function getSalaryAttribute($value)
    {
        return decrypt($value); // Decrypt the salary before returning
    }
}
