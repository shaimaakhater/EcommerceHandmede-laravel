<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Menu as modelRequest;
use DataTables;
use App\Menu as model;


class MenuController extends Controller
{
    private $view ='admin.menu.';
    private $route ='menu.'; //SAve

    public function index()
    {
        $menus = model::all();
        return view($this->view . 'index', ['menus' => $menus]);
    }
    public function create()
    {
    	$menus = model::pluck('title','id')->prepend(trans('pickSom'),'');
    	// dd($menus);
        return view($this->view . 'create',compact('menus'));
    }
    public function store(modelRequest $request)
    {
        //dd($request);
        $menu = model::create($request->validated());
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.created'));
    }
    public function edit($id)
    {
        $menu = model::findOrFail($id);
        $menus = model::where('id','!=',$id)->pluck('title','id')->prepend(trans('pickSom'),'');

        return view($this->view . 'edit', compact('menu','menus')); 
   }
   public function update($id,modelRequest $request)
    {
        $Menu = model::findOrFail($id);
        $Menu->update($this->getInput($request));
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.updated'));
    } 
    public function show($id)
    {
        $Menu = model::findOrFail($id);
        return view($this->view . 'show', compact('Menu')); 

    }

    public function destroy($id, Request $request )
    {
       //dd($id); 
       $menu = model::findOrFail($id);   
       return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.deleted'));  
    }

    public function confirmation($id)
    {
                //dd($id);

        $Menu = model::findOrFail($id);
        return view($this->view . 'delete', compact('Menu')); 
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
    public function loadData(Menu $Menu)
    {
        $Menus = model::all();
        return DataTables::of($Menus)
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
