<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product as modelRequest;
use DataTables;
use App\Product as model;
use App\Category;
use App\Brand;

class ProductController extends Controller
{
   private $view ='admin.product.';
   private $route ='product.';

    public function index()
    {

        return view($this->view . 'index');

    }
    public function create()
    {

        $cats = Category::pluck('name','id');
        $brands =Brand::pluck('name','id');
        return view($this->view . 'create',compact('cats','brands'));

    }
    public function store(modelRequest $request)
    {
       
        //dd($request);
       $product= model::create($this->getInput($request));
       $product->stocks()->create(['qty'=>$request->qty]);
        return redirect(route($this->route . 'index'))->
        withFlashMessage(trans('admin.created'));

    }
    public function edit($id)
    {
                //dd($id);

	    $product = model::findOrFail($id);
      $cats = Category::pluck('name','id');
        $brands =Brand::pluck('name','id');
	    return view($this->view . 'edit', compact('product')); 

   }
   public function update($id,modelRequest $request)
    {

        $product = model::findOrFail($id);
        $product->update($this->getInput($request));
        return redirect(route($this->route . 'index'))
        ->withFlashMessage(trans('admin.updated'));

    } 
    public function show($id)
    {
       
        $product = model::findOrFail($id);
        return view($this->view . 'show', compact('product')); 

    }

    public function destroy($id, Request $request )
    {
      
       //dd($id); 
       model::findOrFail($id)->delete();   
       return redirect(route($this->route . 'index'))
       ->withFlashMessage(trans('admin.deleted')); 

    }

    public function confirmation($id)
    {
                //dd($id);

        $product = model::findOrFail($id);
        return view($this->view . 'delete', compact('product')); 

   }

   private function getInput($request)
    {
        $input = $request->validated();
        $input['slug']  = str_slug($input['name']);
        $input['user_id'] = auth()->id();
        $input['image'] = uploading()->singleImage('image');

        return $input; 
        
   }

    //Ajax functions
    public function loadData()
    {
        $products = model::all();
        return DataTables::of($products)
        ->rawColumns(['action'])
        ->editColumn('action',function($model){
          $edit = editBtn(route($this->route . 'edit', $model->id));
          $delete = deleteBtn(route($this->route . 'delete', $model->id));
          $show = showBtn(route($this->route . 'show', $model->id));


            return $edit . ' ' . $show . ' ' .$delete;
        }) 
        ->make(true);
    }

}
