<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Shape_Models\Circle;
use App\Models\Shape_Models\Rectangle;


class ShapeController extends Controller
{
    public function index()
    {
        return view('question2.index');
    }

    public function calculateArea(Request $request)
    {
        $shapeType = $request->input('shape_type');
        $area = 0;

        if ($shapeType == 'circle') {
            $radius = $request->input('radius');
            $circle = new Circle($radius);
            $area = $circle->calculateArea();
        } elseif ($shapeType == 'rectangle') {
            $length = $request->input('length');
            $width = $request->input('width');
            $rectangle = new Rectangle($length, $width);
            $area = $rectangle->calculateArea();
        }

        return view('question2.result', compact('shapeType', 'area'));
    }
}
