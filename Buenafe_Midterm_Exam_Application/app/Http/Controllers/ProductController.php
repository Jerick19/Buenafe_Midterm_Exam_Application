<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Inception', 'director' => 'Christopher Nolan'],
            ['title' => 'Parasite', 'director' => 'Bong Joon-ho'],
            ['title' => 'Mad Max: Fury Road', 'director' => 'George Miller'],
            ['title' => 'The Social Network', 'director' => 'David Fincher'],
            ['title' => 'The Grand Budapest Hote', 'director' => 'Wes Anderson']
        ];

        return view('products', compact('products'));
    }
}