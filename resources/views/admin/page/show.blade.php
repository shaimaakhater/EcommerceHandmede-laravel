@extends('admin.layouts.master')
@section('title') {{ trans('admin.show' ,['name' =>trans('admin.page')]) }} @endsection

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.show' ,['name' =>trans('admin.page')]) }}</h3>
            </div>
           <div class="box-body">
           <table id="data-get" class="table table-bordered table-striped">
                <tbody>
                  <tr>
                   <th>{{ trans('admin.id') }}</th>
                   <td>{{ $page->id }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.title') }}</th>
                   <td>{{ $page->title }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.slug') }}</th>
                   <td>{{ $page->slug }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.user') }}</th>
                   <td>{{ $page->Creator }}</td>
                  </tr>
                  @if($page->image !=null)
                  <tr>
                   <th>{{ trans('admin.image') }}</th>
                   <td><img scr="{{$page->photo}}" style="width: 150px; height: 150px"></td>
                  </tr>
                  @endif
                  <tr>
                   <th>{{ trans('admin.content') }}</th>
                   <td>{{ $page->content }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.action') }}</th>
                   <td>{!! editBtn(route('page.edit', $page->id)) . ' ' . deleteBtn(route('page.delete', $page->id)) !!}</td>
                  </tr>

                </tbody>
            </table>

          </div>
          </div>
          <!-- /.box --> 
        </div>
        </div>
@endsection