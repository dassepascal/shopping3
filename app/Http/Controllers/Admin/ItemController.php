<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::latest()->paginate(5);
        
        return view('admin.items.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        $item = new Item();
        return view('admin.items.create', [
            'item' => $item
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        $item = Item::create($request->validated());
        return redirect()->route('admin.items.index')
        ->with('success', 'Item created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('admin.items.show', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('admin.items.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->update($request->validated());
        return redirect()->route('admin.items.index')
        ->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('admin.items.index')
        ->with('success', 'Item deleted successfully');
    }
}
