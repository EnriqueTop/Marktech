<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {

        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products"] = Product::all();
        $viewData["products_featured"] = Product::where('featured', '=', '1')->get();
        $viewData["products_new"] = Product::where('created_at')->first()->take(8)->orderBy('created_at', 'desc')->get();

        return view('product.index')->with("viewData", $viewData);

    }

    public function show($id)
    {
        $viewData = [];

        $product = Product::findOrFail($id);

        $viewData["title"] = $product->getName() . "- Marktech";
        $viewData["subtitle"] = $product->getName() . "- Productos";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }

    public function accesorios()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_accesorios"] = Product::where('category', '=', 'accesorios')->get();

        return view('product.categories.accesorios')->with("viewData", $viewData);

    }

    public function hardware()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_hardware"] = Product::where('category', '=', 'hardware')->get();

        return view('product.categories.hardware')->with("viewData", $viewData);

    }

    public function computadoras()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_computadoras"] = Product::where('category', '=', 'computadoras')->get();

        return view('product.categories.computadoras')->with("viewData", $viewData);

    }

    public function electronica()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_electronica"] = Product::where('category', '=', 'electronica')->get();

        return view('product.categories.electronica')->with("viewData", $viewData);

    }

    public function bannermac()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["banner_mac"] = Product::where('trademark', '=', 'apple')->where('category', '=', 'computadoras')->get();

        return view('banner.mac')->with("viewData", $viewData);

    }

    public function bannernvidia()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["banner_nvidia"] = Product::where('trademark', '=', 'nvidia')->get();

        return view('banner.nvidia')->with("viewData", $viewData);

    }

    public function banneradata()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["banner_adata"] = Product::where('trademark', '=', 'adata')->where('subcategory', '=', 'hdd')->orwhere('trademark', '=', 'adata')->where('subcategory', '=', 'ssd')->orwhere('trademark', '=', 'adata')->where('subcategory', '=', 'ram')->get();

        return view('banner.adata')->with("viewData", $viewData);

    }

    public function bannertoshiba()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["banner_toshiba"] = Product::where('trademark', '=', 'toshiba')->where('subcategory', '=', 'hdd')->orwhere('trademark', '=', 'toshiba')->where('subcategory', '=', 'ssd')->get();

        return view('banner.toshiba')->with("viewData", $viewData);

    }

    public function bannerlg()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["banner_lg"] = Product::where('trademark', '=', 'lg')->where('subcategory', '=', 'monitores')->orwhere('subcategory', '=', 'tv')->get();

        return view('banner.lg')->with("viewData", $viewData);

    }

    public function hardwareprocesadores()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_hardware_procesadores"] = Product::where('subcategory', '=', 'procesadores')->get();

        return view('product.categories.hardware.hardware_procesadores')->with("viewData", $viewData);

    }

    public function hardwaremotherboard()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_hardware_motherboard"] = Product::where('subcategory', '=', 'motherboard')->get();

        return view('product.categories.hardware.hardware_motherboard')->with("viewData", $viewData);

    }

    public function hardwareram()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_hardware_ram"] = Product::where('subcategory', '=', 'ram')->get();

        return view('product.categories.hardware.hardware_ram')->with("viewData", $viewData);
    }

    public function hardwaressd()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_hardware_ssd"] = Product::where('subcategory', '=', 'ssd')->get();

        return view('product.categories.hardware.hardware_ssd')->with("viewData", $viewData);
    }

    public function hardwaregpu()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_hardware_gpu"] = Product::where('subcategory', '=', 'gpu')->get();

        return view('product.categories.hardware.hardware_gpu')->with("viewData", $viewData);
    }

    public function hardwaredisipadores()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_hardware_disipadores"] = Product::where('subcategory', '=', 'disipadores')->get();

        return view('product.categories.hardware.hardware_disipadores')->with("viewData", $viewData);
    }

    public function hardwaregabinetes()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_hardware_gabinetes"] = Product::where('subcategory', '=', 'gabinetes')->get();

        return view('product.categories.hardware.hardware_gabinetes')->with("viewData", $viewData);
    }

    public function hardwarehdd()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_hardware_hdd"] = Product::where('subcategory', '=', 'hdd')->get();

        return view('product.categories.hardware.hardware_hdd')->with("viewData", $viewData);
    }

    public function hardwareusb()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_hardware_usb"] = Product::where('subcategory', '=', 'usb')->get();

        return view('product.categories.hardware.hardware_usb')->with("viewData", $viewData);
    }

    public function accesoriosmouse()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_accesorios_mouse"] = Product::where('subcategory', '=', 'mouse')->get();

        return view('product.categories.accesorios.accesorios_mouse')->with("viewData", $viewData);
    }

    public function accesoriosteclados()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_accesorios_teclados"] = Product::where('subcategory', '=', 'teclados')->get();

        return view('product.categories.accesorios.accesorios_teclados')->with("viewData", $viewData);
    }

    public function accesoriosaudifonos()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_accesorios_audifonos"] = Product::where('subcategory', '=', 'audifonos')->get();

        return view('product.categories.accesorios.accesorios_audifonos')->with("viewData", $viewData);
    }

    public function accesoriosalfombrillas()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_accesorios_alfombrillas"] = Product::where('subcategory', '=', 'alfombrillas')->get();

        return view('product.categories.accesorios.accesorios_alfombrillas')->with("viewData", $viewData);
    }

    public function computadoraslaptop()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_computadoras_laptop"] = Product::where('subcategory', '=', 'laptop')->get();

        return view('product.categories.computadoras.computadoras_laptop')->with("viewData", $viewData);
    }

    public function computadorasescritorio()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_computadoras_escritorio"] = Product::where('subcategory', '=', 'escritorio')->get();

        return view('product.categories.computadoras.computadoras_escritorio')->with("viewData", $viewData);
    }

    public function electronicaconsolas()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_electronica_consolas"] = Product::where('subcategory', '=', 'consolas')->get();

        return view('product.categories.electronica.electronica_consolas')->with("viewData", $viewData);
    }

    public function electronicatv()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_electronica_tv"] = Product::where('subcategory', '=', 'tv')->get();

        return view('product.categories.electronica.electronica_tv')->with("viewData", $viewData);
    }

    public function electronicamonitores()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_electronica_monitores"] = Product::where('subcategory', '=', 'monitores')->get();

        return view('product.categories.electronica.electronica_monitores')->with("viewData", $viewData);
    }

    public function electronicabocinas()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_electronica_bocinas"] = Product::where('subcategory', '=', 'bocinas')->get();

        return view('product.categories.electronica.electronica_bocinas')->with("viewData", $viewData);
    }

    public function electronicacamaras()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_electronica_camaras"] = Product::where('subcategory', '=', 'camaras')->get();

        return view('product.categories.electronica.electronica_camaras')->with("viewData", $viewData);
    }

    public function electronicatelefonos()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["products_electronica_telefonos"] = Product::where('subcategory', '=', 'telefonos')->get();

        return view('product.categories.electronica.electronica_telefonos')->with("viewData", $viewData);
    }

    //trademark

    public function nvidia()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["trademark_nvidia"] = Product::where('trademark', '=', 'nvidia')->get();

        return view('product.trademarks.nvidia')->with("viewData", $viewData);

    }

    public function dell()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["trademark_dell"] = Product::where('trademark', '=', 'dell')->get();

        return view('product.trademarks.dell')->with("viewData", $viewData);

    }

    public function gigabyte()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["trademark_gigabyte"] = Product::where('trademark', '=', 'gigabyte')->get();

        return view('product.trademarks.gigabyte')->with("viewData", $viewData);

    }

    public function hp()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] = "Productos";

        $viewData["trademark_hp"] = Product::where('trademark', '=', 'hp')->get();

        return view('product.trademarks.hp')->with("viewData", $viewData);

    }
}
