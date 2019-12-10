@extends('admin.layouts.master')
@section('title') {{ trans('admin.delete' ,['name' =>trans('admin.brand')]) }} @endsection

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.delete' ,['name' =>trans('admin.brand')]) }}</h3>
            </div>
           
      
                      {!!
                        Form::model($brand, [
                        'route'    => ['brand.update',$brand->id),
                        'method'   =>'PATCH',
                        'role'     =>'form',
                        'files'    => 'true'

                        ]);
                      !!} 
                    <input type="hidden" name="id" value="{{ $brand->id }}">
                      <div class="box-body">

                      @include('admin.brand.form')

                      {!! Form::close() !!}

  

          </div>
          </div>
          <!-- /.box --> 
        </div>
        </div>
@endsection