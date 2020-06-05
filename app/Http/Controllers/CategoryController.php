<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;
use App\http\Resources\CategoryResource;
use App\http\Resources\CategoryResourceCollection;
class CategoryController extends Controller
{
    
    
    public function index(){
        
        return view('welcome');
    }
   

    
        //Start API function
        //*
        //*
    //Show category by id
    public function show(Category $category): CategoryResource
    {

        return new CategoryResource($category);
    }
    
  
    // Create new category
    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
        ]);
        
        $category = Category::create($request->all());
        return new CategoryResource($category);
    }
    
    
    
    // Update Category
    public function update(Category $category, Request $request): CategoryResource
    {
        
        $category ->update($request->all());
        
        return new CategoryResource($category);
    }
    
    
    //Delete category
    public function destroy(Category $category){
        
        $category->delete();
        
        return response()->json();
    }
    
    
    
    

}
