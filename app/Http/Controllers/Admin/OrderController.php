<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use App\Order as model;


class OrderController extends Controller
{ 


	private $view ='admin.order.';
    private $route ='order.';

    public function index()
      {

          return view($this->view . 'index');
      }


    public function show($id)
      {
          $order = model::findOrFail($id);
          $order->update(['seen' =>1]);
          return view($this->view . 'show', compact('order'));

      }

     public function update($id,modelRequest $request)
      {
        $status=$request->validate(['status'=> 'required|boolean']);
        $order = model::findOrFail($id);
        $order->update($status);

        return redirect()->back()->withFlashMessage(trans('admin.updated'));
      }
     

      public function destroy($id, Request $request )
      {

         //dd($id);
         model::findOrFail($id)->delete();
         return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.deleted'));
         
      }

      public function confirmation($id)
      {
                  //dd($id);

          $order = model::findOrFail($id);
          return view($this->view . 'delete', compact('order'));
     }

     private function getInput($request)
      {
          $input = $request->only(['name', 'slug', 'description', 'image','parent_id','status']);
          $input['slug']  = str_slug($input['name']);
          $input['user_id'] = \Auth::id();
          $input['image'] = uploading()->singleImage('image');

          return $input;
     }

      //Ajax functions
      public function loadData(Page $page)
      {
          $order = model::all();
          return DataTables::of($cats)
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
