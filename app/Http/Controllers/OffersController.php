<?php

namespace App\Http\Controllers;

use Session;
use App\Offers;
use App\OffersItems;
use App\OffersItemsCategories;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        $offers = Offers::paginate(5);
        return view('offers.index')->withOffers($offers);
    }

    public function sortByCategory($offer, $category)
    {
        $items = OffersItems::where('category_id', $category)->paginate(5);
        $categories = OffersItemsCategories::get();
        return view('offers.sortByCategory')->withItems($items)->withCategories($categories)->withOffer($offer);
    }

    public function create()
    {
        return view('offers.create');
    }

    public function addItem($offer) {

        $firstCategory = OffersItemsCategories::first();
        $items = OffersItems::where('category_id', $firstCategory->id)->paginate(5);
        $categories = OffersItemsCategories::get();
        return view('offers.add')->withItems($items)->withOffer($offer)->withCategories($categories);

    }

    public function storeItem(Request $request) {


        $offer = Offers::find($request->offer_id);
        $offer->items()->attach($request->item_id);

        Session::flash('success', 'ЗАПИСАНО !');
        return redirect()->route('offers.show', $request->offer_id);
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'recipient'    => 'required',
            'writer'       => 'required'
            ));

        $item = new Offers;
        $item->recipient = $request->recipient;
        $item->date = $request->date;
        $item->deadline = $request->deadline;
        $item->writer = $request->writer;
        $item->save();

        Session::flash('success', 'ЗАПИСАНО !');
        return redirect()->route('offers.show', $item->id);
    }

    public function show(Offers $offer)
    {
        return view('offers.show')->withOffer($offer);
    }

    public function edit(Offers $offers)
    {
        //
    }

    public function update(Request $request, Offers $offer)
    {
        // $offer->items()->sync($request->item_id, ['price' => $request->price], false);

        // $update = $offer->items::where('item_id', $request->item_id)->first();

        if($request->price) {
            $offer->items()->updateExistingPivot($request->item_id, ['price' => $request->price]);
        }

        if($request->quantity) {
            $offer->items()->updateExistingPivot($request->item_id, ['quantity' => $request->quantity]);
        }

        if($request->is_active) {
            $offer->items()->updateExistingPivot($request->item_id, ['is_active' => $request->is_active]);
        }



        // $update->price = $request->price;
        // $update->update();

        Session::flash('success', 'ЗАПИСАНО !');
        return redirect()->route('offers.show', $offer);
    }

    public function destroy(Offers $offers)
    {
        //
    }
}
