@extends('admin.layouts.master')
@section('title') {{ trans('admin.orders') }} @endsection

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ trans('admin.orders')}} </h3>
            </div>
            <div class="box-body">
              <table id="data-get" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>{{ trans('admin.id')}}</th>
                  <th>{{ trans('admin.price')}}</th>
                  <th>{{ trans('admin.create_at')}}</th>
                  <th>{{ trans('admin.action')}}</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                  <th>{{ trans('admin.id')}}</th>
                  <th>{{ trans('admin.price')}}</th>
                  <th>{{ trans('admin.create_at')}}</th>
                  <th>{{ trans('admin.action')}}</th>
                </tr>
                </tfoot>
              </table>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.box -->
        </div>
        </div>
@endsection
@section('script')
<!-- contact script -->
<script>
  $(function () {
    $("#data-get").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "processing": true,
        "serverSide": true,
        "ajax": "{{ route('admin.order.data')}}",
        "columns":[
            { "data": "id", "name" :"id"},
            { "data": "total_price", "name" :"total_price"},
            { "data": "created_at", "name" :"created_at"},
            { "data": "action", "name" : "" },
        ]
    });
  });
</script>
@endsection
