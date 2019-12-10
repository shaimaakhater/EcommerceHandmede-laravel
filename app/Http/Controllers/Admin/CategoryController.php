<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category as modelRequest;
use DataTables;
use App\Category as model;

class CategoryController extends Controller
{
    private $view ='admin.category.';
    private $route ='category.';

    public function index()
    {
        // echo "fsdffs";
        $cats=model::all();
        return view($this->view.'.index',compact(
            'cats'));
    }

    public function create()
    {   

        $cats = model::pluck('name','id')->prepend(trans('admin.pickSom'),'');
        return view($this->view .'.create',compact('cats'));
        
    }
    public function store(modelRequest $request)
    {
        
        //dd($request);
        model::create($this->getInput($request));

        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.created'));
    }
    public function edit($id)
    {

        $category = model::findOrFail($id);

        $cats = model::where('id','!=',$id)->pluck('title','id')->prepend(trans('admin.pickSom'),'');
        return view($this->view . 'edit', compact('category' ,'cats')); 
   }
   public function update($id,modelRequest $request)
    {

        $category = model::findOrFail($id);
        $category->update($this->getInput($request));
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.updated'));
    } 
    public function show($id)
    {

        $category = model::findOrFail($id);
        return view($this->view . 'show', compact('category')); 

    }

    public function destroy($id, Request $request )
    {

       //dd($id); 
       $category = model::findOrFail($id);   
       return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.deleted'));  
    }

    public function confirmation($id)
    {
                //dd($id);

        $category = model::findOrFail($id);
        return view($this->view . 'delete', compact('category')); 
   }

   private function getInput($request)
    {

        $input = $request->only(['name','description','parent_id','status']);
        $input['parent_id'] = \Auth::id();
        $input['image'] = uploading()->singleImage('image');

        return $input; 
   }

    //Ajax functions
    public function loadData()
    {

        $pages = model::all();
        return DataTables::of($categories)
        ->rawColumns(['action','image'])
        ->editColumn('image',function($model){
  
            return showImage($model->photo);
        }) 
        
        ->editColumn('action',function($model){
          $edit = editBtn(route($this->route . 'edit', $model->id));
          $delete = deleteBtn(route($this->route . 'delete', $model->id));
          $show = showBtn(route($this->route . 'show', $model->id));


            return $edit . ' ' . $show . ' ' .$delete;
        }) 
        ->make(true);
    }
}
