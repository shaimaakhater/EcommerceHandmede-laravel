@extends('admin.layouts.master')
@section('title') {{ trans('admin.edit' ,['name' =>trans('admin.product')]) }} @endsection

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> {{ trans('admin.edit' ,['name' =>trans('admin.product')]) }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!!
               Form::model($product, [
                'route'    =>['product.update', $product->id],
                'method'   =>'PATCH',
                'role'     =>'form',
                'files'    => true

                ])
            !!} 
            <input type="hidden" name="id" value="{{$product->id}}">
           <div class="box-body">
               @include('admin.product.form')
             
            {!! Form::close() !!}
        
          </div>
          </div>
          <!-- /.box --> 
        </div>
        </div>
@endsection