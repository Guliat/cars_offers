<?php

namespace App\Http\Controllers;

use Image;
use Session;
use App\OffersItems;
use App\OffersItemsCategories;
use Illuminate\Http\Request;

class OffersItemsController extends Controller
{
    public function index()
    {
        $items = OffersItems::paginate(5);
        $categories = OffersItemsCategories::get();
        return view('offers.items.index')->withItems($items)->withCategories($categories);
    }

    public function sortByCategory($id)
    {
        $items = OffersItems::where('category_id', $id)->paginate(5);
        $categories = OffersItemsCategories::get();
        return view('offers.items.sortByCategory')->withItems($items)->withCategories($categories);
    }

    public function create()
    {
        $categories = OffersItemsCategories::get();
        return view('offers.items.create')->withCategories($categories);
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name'        => 'required',
            'description' => 'required',
            'price'       => 'numeric|min:0',
            'image'       => 'image|max: 10000|dimensions: min_width=500, min_height=500',
            ));

        $filename = null;
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = strtolower(time() . '.' . $image->getClientOriginalExtension());
            Image::make($image)->fit(150)->orientate()->save( 'images/' . $filename );
        }

        $item = new OffersItems;
        $item->category_id = $request->category_id;
        $item->image = $filename;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->quantity_type = $request->quantity_type;
        $item->price = $request->price;
        $item->note = $request->note;
        $item->save();

        Session::flash('success', 'ЗАПИСАНО !');
        return redirect()->route('offers_items.index');
    }

    public function show(OffersItems $offersItems)
    {
        //
    }

    public function edit(OffersItems $offersItem)
    {
        return view('offers.items.edit')->withItem($offersItem);
    }

    public function update(Request $request, OffersItems $offersItem)
    {
        $this->validate($request, array(
            'name'        => 'required',
            'description' => 'required',
            'price'       => 'numeric|min:0',
            'image'       => 'image|max: 10000|dimensions: min_width=500, min_height=500',
            ));

        // $filename = null;
        // if($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $filename = strtolower(time() . '.' . $image->getClientOriginalExtension());
        //     Image::make($image)->fit(700)->orientate()->save( 'images/' . $filename );
        //     Image::make($image)->fit(100)->orientate()->save( 'images/thumbs/' . $filename );
        //
        // }

        // $offersItem->image = $filename;
        $offersItem->name = $request->name;
        $offersItem->description = $request->description;
        $offersItem->quantity_type = $request->quantity_type;
        $offersItem->price = $request->price;
        $offersItem->note = $request->note;
        $offersItem->update();

        Session::flash('success', 'ЗАПИСАНО !');
        return redirect()->back();
    }

    public function destroy(OffersItems $offersItems)
    {
        //
    }
}
