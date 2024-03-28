<?php

namespace App\Models\Shape_Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rectangle extends Model
{
    use HasFactory;

    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->length * $this->width;
    }
}
