<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    
    
    // Show item by id
    public function show(Item $id)
    {

        return $id;
    }
    
    
    // Create item
    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);
        
        $item = Item::create($request->all());
        return $item;
    }
    
    
    // Update item
    public function update($id, Request $request)
    {
        
        $item = Item::findOrFail($id);
        $item->update($request->all());

        dd($item);
        return $item;
        
    }
    
    
    // Delete item
    public function delete($id)
    {
        
        Item::find($id)->delete();
        return 0;
        
    }
    
}
