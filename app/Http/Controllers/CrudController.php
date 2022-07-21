<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {

        $userId = Auth::user()->getId();

        //get posts
        $posts = Address::latest()->where('user_id','=', $userId)->paginate(15);

        //render view with posts
        return view('myaccount.myaddress', compact('posts'));
    }

    // /**
    //  * create
    //  *
    //  * @return void
    //  */
    // // public function create()
    // // {
    // //     return view('myaccount.myaddress.create');
    // // }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        // // validate form
        // $this->validate($request, [
        //     'nombre'     => 'required | max:255',
        //     'postal'   => 'required | numeric | max:20',
        //     'estado' => 'required | max:255',
        //     'municipio' => 'required | max:255',
        //     'colonia' => 'required | max:255',
        //     'calle' => 'required | max:255',
        //     'exterior' => 'required | numeric | max:20',
        //     'interior' => 'numeric',
        //     'calle1' =>  'max:255',
        //     'calle2' => 'max:255',
        //     'tipo' => 'required | max:255',
        //     'telefono' => 'required| numeric',
        //     'extra' => 'max:255',
        // ]);

        // //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());

        //create post
        Post::create([
            'user_id'   => Auth::user()->getId(),
            'nombre'     => $request->nombre,
            'postal'   => $request->postal,
            'estado' => $request->estado,
            'municipio' => $request->municipio,
            'colonia' => $request->colonia,
            'calle' => $request->calle,
            'exterior' => $request->exterior,
            'interior' => $request->interior,
            'calle1' => $request->calle1,
            'calle2' => $request->calle2,
            'tipo' => $request->tipo,
            'telefono' => $request->telefono,
            'extra' => $request->extra,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //redirect to index
        return redirect()->route('myaccount.myaddress');
    }

    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit(Address $post)
    {
        return view('myaccount.myaddress.edit', compact('post'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, Address $post)
    {
        //  // validate form
        //  $this->validate($request, [
        //     'nombre'     => 'required | max:255',
        //     'postal'   => 'required | numeric | max:20',
        //     'estado' => 'required | max:255',
        //     'municipio' => 'required | max:255',
        //     'colonia' => 'required | max:255',
        //     'calle' => 'required | max:255',
        //     'exterior' => 'required | numeric | max:20',
        //     'interior' => 'numeric',
        //     'calle1' =>  'max:255',
        //     'calle2' => 'max:255',
        //     'tipo' => 'required | max:255',
        //     'telefono' => 'required| numeric',
        //     'extra' => 'max:255',
        // ]);
        //check if image is uploaded
        // if ($request->hasFile('image')) {

        //     //upload new image
        //     $image = $request->file('image');
        //     $image->storeAs('public/posts', $image->hashName());

        //     //delete old image
        //     Storage::delete('public/posts/'.$post->image);

        //     //update post with new image
        //     $post->update([
        //         'image'     => $image->hashName(),
        //         'title'     => $request->title,
        //         'content'   => $request->content
        //     ]);

        // } else {


            //update post without image
            $post->update([
                'user_id'   => Auth::user()->getId(),
                'nombre'     => $request->nombre,
                'postal'   => $request->postal,
                'estado' => $request->estado,
                'municipio' => $request->municipio,
                'colonia' => $request->colonia,
                'calle' => $request->calle,
                'exterior' => $request->exterior,
                'interior' => $request->interior,
                'calle1' => $request->calle1,
                'calle2' => $request->calle2,
                'tipo' => $request->tipo,
                'telefono' => $request->telefono,
                'extra' => $request->extra,
                'created_at' => now(),
                'updated_at' => now()
            ]);


        //redirect to index
        return redirect()->route('myaccount.myaddress');
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy(Address $post)
    {
        // //delete image
        // Storage::delete('public/posts/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('myaccount.myaddress');
    }
}
