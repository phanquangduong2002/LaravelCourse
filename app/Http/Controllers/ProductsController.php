<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $title = 'Laravel Course';
        // return view('products.index', compact(('title')));
        $name = 'Duong';
        // return view('products.index')->with('name', $name);

        // send an associative array
        $myPhone = [
            'name' => "iPhone 15",
            'year' => 2023,
            'isFarovited' => true
        ];

        // return view('products.index', compact('myPhone'));
        // return view('products.index', [
        //     'myphone' => $myPhone
        // ]);
    }

    public function detail($id)
    {
        return view('products.index', [
            'product' => [
                'name' => 'iPhone 15 Promax',
                'year' => 2023
            ]
        ]);
    }
}
