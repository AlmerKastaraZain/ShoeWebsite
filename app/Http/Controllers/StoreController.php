<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use App\Models\shop;
use Illuminate\Http\Request;
use Nette\Utils\Strings;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('shop.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
    * Display the specified resource.
    */

    // Dummy 
    // $shoes = Shoe::create([
    //     'name' => 'Shoes',
    //     'brand' => 'Awake',
    //     'collection' => 'ShoesCollection',
    //     'price' => '10000',
    //     'stock' => '10',
    //     'attributes' => '{
    //         "gender": "female",
    //         "kids": "False",
    //         "sale":"False",
    //         "shoe_height": "low",
    //         "width": "regular",
    //         "sport": "football",
    //         "feature": [
    //         "spikeless",
    //         "water-resistant",
    //         "waterproof"
    //         ]
    //     }'
    // ]);
    public function search(Request $request)
    {
        $attribute = $request->except('_token');
        $shoes = Shoe::get('*');
        if ($request->has('mens'))
        {
            return View('shop.mens');
            
        }


        if ($request->has('kids'))
        {
            return View('shop.kids');
        }

        return View('shop.search', ['attribute' => $attribute, 'shoes' => $shoes]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
