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
            return view('search.nofound')->withMessage('No se encontraron resultados para la busqueda');
        }

    }

    public static function search()
    {
        $barra = Request::get('barra');
        // Sets the parameters from the get request to the variables.
        $trademark = Request::get('trademark');

        // Perform the query using Query Builder
        if ($trademark == 'all') {
            $result = Product::where('name', 'LIKE', '%' . $barra . '%')->get();
        } else {
            $result = Product::where('name', 'LIKE', '%' . $barra . '%')->where('trademark', '=', $trademark)->get();
        }

        $sort = Request::get('sort');
        // // sort the results by price
        // if ($sort == 'price') {
        //     $sort = $result->sortBy('price');
        // } else {
        //     $result = $result->sortBy('name');
        // }

        switch ($sort) {
            case 'name':
                $result = $result->sortBy('name');
                break;
            case 'price_asc':
                $result = $result->sortBy('price');
                break;
            case 'price_desc':
                $result = $result->sortByDesc('price');
                break;
            case 'trademark':
                $result = $result->sortBy('trademark');
                break;
            case 'stock':
                $result = $result->sortBy('stock');
                break;
            default:
                $result = $result->sortBy('name');
                break;
        }
        // If there are no results, return a message.
        if (count($result) > 0) {
            return view('search.search')->withDetails($result)->withQuery($barra)->withSort($sort);
        } else {
            return view('search.nofound')->withMessage('No se encontraron resultados para la busqueda');
        }

    }

}
