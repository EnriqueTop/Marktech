<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Trademarks;
use Request;

class SearchController extends Controller
{
    public static function index()
    {
        $viewData = [];
        $viewData["trademarks"] = Trademarks::all();

        $barra = Request::get('barra');
        $product = Product::where('name', 'LIKE', '%' . $barra . '%')->get();
        if (count($product) > 0) {
            return view('search.search')->withDetails($product)->withQuery($barra)->with("viewData", $viewData);
        } else {
            return view('search.nofound')->withMessage('No se encontraron resultados para la busqueda');
        }

    }

    public static function search()
    {
        $viewData = [];
        $viewData["trademarks"] = Trademarks::all();

        $barra = Request::get('barra');
        // Sets the parameters from the get request to the variables.
        $trademark = Request::get('trademark');
        $price = Request::get('price');

        // Perform the query using Query Builder
        // if ($trademark == 'all' && $price == '0-500') {
        //     $result = Product::where('name', 'LIKE', '%' . $barra . '%')->where('price', '<', 500)->get();
        // } elseif ($trademark == 'all') {
        // } else {
        //     $result = Product::where('name', 'LIKE', '%' . $barra . '%')->where('trademark', '=', $trademark)->get();
        // }

        switch ($trademark) {
            case 'all' && $price == '1000-2000':
                $result = Product::where('name', 'LIKE', '%' . $barra . '%')->where('price', '>', 1000)->where('price', '<', 2000)->where('trademark', '=', $trademark)->orWhere('name', 'LIKE', '%' . $barra . '%')->where('price', '>', 1000)->where('price', '<', 2000)->get();
                break;
            case 'all' && $price == '2000-3000':
                $result = Product::where('name', 'LIKE', '%' . $barra . '%')->where('price', '>', 2000)->where('price', '<', 3000)->where('trademark', '=', $trademark)->orWhere('name', 'LIKE', '%' . $barra . '%')->where('price', '>', 2000)->where('price', '<', 3000)->get();
                break;
            case 'all' && $price == '3000-4000':
                $result = Product::where('name', 'LIKE', '%' . $barra . '%')->where('price', '>', 3000)->where('price', '<', 4000)->where('trademark', '=', $trademark)->orWhere('name', 'LIKE', '%' . $barra . '%')->where('price', '>', 3000)->where('price', '<', 4000)->get();
                break;
            case 'all' && $price == '4000-5000':
                $result = Product::where('name', 'LIKE', '%' . $barra . '%')->where('price', '>', 4000)->where('price', '<', 5000)->where('trademark', '=', $trademark)->orWhere('name', 'LIKE', '%' . $barra . '%')->where('price', '>', 4000)->where('price', '<', 5000)->get();
                break;
            case 'all' && $price == '5000-...':
                $result = Product::where('name', 'LIKE', '%' . $barra . '%')->where('price', '>', 5000)->where('trademark', '=', $trademark)->orWhere('name', 'LIKE', '%' . $barra . '%')->where('price', '>', 5000)->get();
                break;
            case 'all':
                $result = Product::where('name', 'LIKE', '%' . $barra . '%')->get();
                break;
            default:
                $result = Product::where('name', 'LIKE', '%' . $barra . '%')->where('trademark', '=', $trademark)->get();
                break;
        }

        // if ($price < 0) {
        //     $result = Product::where('name', 'LIKE', '%' . $barra . '%')->where('price', '<', $price)->get();
        // } else {
        // }

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
            return view('search.search')->withDetails($result)->withQuery($barra)->withSort($sort)->with("viewData", $viewData);
        } else {
            return view('search.nofound')->withMessage('No se encontraron resultados para la busqueda')->with("viewData", $viewData);
        }

    }

}
