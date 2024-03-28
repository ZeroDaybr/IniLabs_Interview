<?php

namespace App\Models\Animal_Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function makeSound()
    {
        return "Some generic sound";
    }
}
