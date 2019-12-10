@extends('admin.layouts.master')
@section('title') {{ trans('admin.show' ,['name' =>trans('admin.product')]) }} @endsection

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.show' ,['name' =>trans('admin.product')]) }}</h3>
            </div>
           <div class="box-body">
           <table id="data-get" class="table table-bordered table-striped">
                <tbody>
                  <tr>
                   <th>{{ trans('admin.id') }}</th>
                   <td>{{ $product->id }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.title') }}</th>
                   <td>{{ $product->name }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.slug') }}</th>
                   <td>{{ $product->slug }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.user') }}</th>
                   <td>{{ $product->user->name }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.category') }}</th>
                   <td>{{ $product->category->name }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.brand') }}</th>
                   <td>{{ $product->brand->name }}</td>
                  </tr>
                  @if($product->image !=null)
                  <tr>
                   <th>{{ trans('admin.image') }}</th>
                   <td><img scr="{{$product->photo}}" style="width: 150px; height: 150px"></td>
                  </tr>
                  @endif
                  <tr>
                   <th>{{ trans('admin.content') }}</th>
                   <td>{{ $product->details }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.action') }}</th>
                   <td>{!! editBtn(route('product.edit', $product->id)) . ' ' . deleteBtn(route('product.delete', $product->id)) !!}</td>
                  </tr>

                </tbody>
            </table>

          </div>
          </div>
          <!-- /.box --> 
        </div>
        </div>
@endsection