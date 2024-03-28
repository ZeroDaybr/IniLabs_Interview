<?php

namespace App\Models\Animal_Models;


use App\Models\Animal_Models\Animal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bird extends Animal
{
    public function makeSound()
    {
        return "Tweet!";
    }
}
