@extends('admin.layouts.master')
@section('title') {{ trans('admin.show' ,['name' =>trans('admin.category')]) }} @endsection

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.show' ,['name' =>trans('admin.category')]) }}</h3>
            </div>
           <div class="box-body">
           <table id="data-get" class="table table-bordered table-striped">
                <tbody>
                  <tr>
                   <th>{{ trans('admin.id') }}</th>
                   <td>{{ $category->id }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.title') }}</th>
                   <td>{{ $category->name }}</td>
                  </tr>
                  @if($category->image !=null)
                  <tr>
                   <th>{{ trans('admin.image') }}</th>
                   <td><img scr="{{$category->photo}}" style="width: 150px; height: 150px"></td>
                  </tr>
                  @endif
                  <tr>
                   <th>{{ trans('admin.status') }}</th>
                   <td>{!! showStatus($category->status) !!}</td>
                  </tr>
                  
                  <tr>
                   <th>{{ trans('admin.action') }}</th>
                   <td>{!! editBtn(route('category.edit', $category->id)) . ' ' . deleteBtn(route('category.delete', $category->id)) !!}</td>
                  </tr>

                </tbody>
            </table>

          </div>
          </div>
          <!-- /.box --> 
        </div>
        </div>
@endsection