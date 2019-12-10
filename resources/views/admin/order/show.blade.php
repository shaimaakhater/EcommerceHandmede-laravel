@extends('admin.layouts.master')
@section('title') {{ trans('admin.show' ,['name' =>trans('admin.contact')]) }} @endsection

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.show' ,['name' =>trans('admin.order')]) }}</h3>
            </div>
           <div class="box-body">
           <table id="data-get" class="table table-bordered table-striped">
                <tbody>
                  <tr>
                   <th>{{ trans('admin.id') }}</th>
                   <td>{{ $order->id }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.user') }}</th>
                   <td>{{ $order->user->name }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.address') }}</th>
                   <td>{{ $order->address}}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.price') }}</th>
                   <td>{{ $order->total_price }}</td>
                  </tr>
                  <tr>
                   <th>{{ trans('admin.currency') }}</th>
                   <td>{{ $order->currency }}</td>
                  </tr>

                  <tr>
                   <th>{{ trans('admin.created_at') }}</th>
                   <td>{{ $order->created_at }}</td>
                  </tr>

                  <tr>
                   <th>{{ trans('admin.action') }}</th>
                   <td> {!!deleteBtn(route('order.delete', $order->id)) !!}
                   </td>
                  </tr>
                </tbody>
              </table>

              <hr/>

            <table id="data-get" class="table table-bordered table-striped">
              <tbody>>
                  <tr class="text-center">
                      <td colspan="2"> <strong>{{trans('admin.order_details') }}</strong></td>

                  </tr>
                  @foreach->($order->orderDetails as $item)
                  <tr>
                    <th>{{$item-> product}}</th>
                    <td>{{ trans('admin.qty') }} : {{$item-> qty}}| {{ trans('admin.price') }}:{{$item->price}} </td>

                </tr>
                  @endforeach
                </tbody>
            </table>

           Form::model($order,[
                'rout' => ['order.update' ,$order->id],
                'method' => 'PATCH',
                'role' => 'form',

            ]) 
            !!}

            <div class="form-group">
                    <label for="{{ trans('admin.status') }}">{{ trans('admin.status') }}</label>
                    {!! Form::select("status",status(), null, [
                        'class' => 'form-control',
                        ]) 

                        !!}

                        @if ($errors->has('status'))
                         <span class="help-block">
                          <strong>{{ $errors->first('status') }}</strong>
                         </span>
                         @endif
            </div>
            <button class="btn btn-primary">{ trans('admin.supmit') }}</button>

            {!! form:close()!!}
          </div>
          </div>
          <!-- /.box -->
        </div>
        </div>
@endsection