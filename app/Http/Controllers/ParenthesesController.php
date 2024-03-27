<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParenthesesController extends Controller
{
    public function index()
    {
        return view('question1.parentheses');
    }


    public function validateParentheses(Request $request)
    {
        $input = $request->input('parentheses');
        $isValid = isValidParentheses($input);

        // return response()->json(['isValid' => $isValid]);
        return view('question1.parentheses')->with('isValid', $isValid);
    }
}


if (!function_exists('isValidParentheses')) {
    function isValidParentheses($s) {
        $stack = [];
        $mapping = [')' => '(', '}' => '{', ']' => '['];

        foreach (str_split($s) as $char) {
            if (array_key_exists($char, $mapping)) {
                $topElement = array_pop($stack) ?: '#';
                if ($mapping[$char] != $topElement) {
                    return false;
                }
            } else {
                array_push($stack, $char);
            }
        }

        return empty($stack);
    }
}
