<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Request;

class SearchController extends Controller
{
    public static function index()
    {

        $barra = Request::get('barra');
        $product = Product::where('name', 'LIKE', '%' . $barra . '%')->get();
        if (count($product) > 0) {
            return view('search.search')->withDetails($product)->withQuery($barra);
        } else {
            return view('search.search')->withMessage('No se encontraron resultados para la busqueda');
        }

    }

    public static function search()
    {
        $barra = Request::get('barra');
        // Sets the parameters from the get request to the variables.
        $trademark = Request::get('trademark');
        // Perform the query using Query Builder
        $result = Product::where('name', 'LIKE', '%' . $barra . '%')->where('trademark', '=', $trademark)->get();

        return view('search.search')->withDetails($result)->withQuery($barra);
    }

}
