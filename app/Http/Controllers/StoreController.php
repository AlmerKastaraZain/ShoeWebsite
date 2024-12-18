<?php

namespace App\Http\Controllers;

use App\Models\Attributes;
use App\Models\Brands;
use App\Models\Shoe;
use App\Models\Shoes;
use App\Models\ShoesAvailabilitys;
use App\Models\ShoesImages;
use App\Models\shop;
use Attribute;
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
        $search = $request->except('_token');
        

        $shoes = Shoes::all();

        $attribute = Attributes::all('*');
        $images = ShoesImages::all();


        return View('shop.search', ['search' => $search, 'shoes' => $shoes, 'images' => $images]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Shoes $shoe)
    {
        $image = ShoesImages::query()->
            where(function ($query) use ($shoe) {
            $query 
                ->where('shoes_id', '=', $shoe->getKey());
            })->get('path');

        $sizes = ShoesAvailabilitys::query()->
            where(function ($query) use ($shoe) {
            $query 
                ->where('shoes_id', '=', $shoe->getKey());
            })->get('*');

        //
        return View('shop.detail', ['shoes' => $shoe, 'images' => $image, 'sizes' => $sizes]);
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
