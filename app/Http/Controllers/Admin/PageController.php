<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page as modelRequest;
use DataTables;
use App\Page as model;


class PageController extends Controller
{
    private $view ='admin.page.';
    private $route ='page.';

    public function index()
    {
        return view($this->view . 'index');
    }
    public function create()
    {
        return view($this->view . 'create');
    }
    public function store(modelRequest $request)
    {
        //dd($request);
        model::create($this->getInput($request));
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.created'));
    }
    public function edit($id)
    {
                //dd($id);

        $page = model::findOrFail($id);
        return view($this->view . 'edit', compact('page')); 
   }
   public function update($id,modelRequest $request)
    {
        $page = model::findOrFail($id);
        $page->update($this->getInput($request));
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.updated'));
    } 
    public function show($id)
    {
        $page = model::findOrFail($id);
        return view($this->view . 'show', compact('page')); 

    }

    public function destroy($id, Request $request )
    {
       //dd($id); 
       $page = model::findOrFail($id);   
       return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.deleted'));  
    }

    public function confirmation($id)
    {
                //dd($id);

        $page = model::findOrFail($id);
        return view($this->view . 'delete', compact('page')); 
   }

   private function getInput($request)
    {
        $input = $request->only(['title','content','seo_des','seo_keys']);
        $input['slug']  = str_slug($input['title']);
        $input['user_id'] = \Auth::id();
        $input['image'] = uploading()->singleImage('image');

        return $input; 
   }

    //Ajax functions
    public function loadData(Page $page)
    {
        $pages = model::all();
        return DataTables::of($pages)
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
