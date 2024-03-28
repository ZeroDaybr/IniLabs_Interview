<?php

namespace App\Http\Controllers\Animal;

use Illuminate\Http\Request;
use App\Models\Animal_Models\Cat;
use App\Models\Animal_Models\Dog;
use App\Models\Animal_Models\Bird;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Animal\AnimalController;

class AnimalController extends Controller
{
    public function polymorphismDemo()
    {
        $dog = new Dog();
        $cat = new Cat();
        $bird = new Bird();

        $sounds = [
            'Dog' => $dog->makeSound(),
            'Cat' => $cat->makeSound(),
            'Bird' => $bird->makeSound()
        ];

        return view('question5.index', compact('sounds'));
    }
}
