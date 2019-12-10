@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="form-group">
            <label for="{{ trans('admin.title') }}">{{ trans('admin.name') }}</label>
            {!! Form::text("name", null, [
                'class' => 'form-control',
                'placeholder' => trans('admin.name'),
                'required'
                ]) !!}
              <!--   @if ($errors->has('name'))
                 <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                 </span>
                 @endif     -->  
    </div>


    <div class="form-group">
            <label for="{{ trans('admin.image') }}">{{ trans('admin.image') }}</label>
            {!! Form::file("image", null, [
                'class' => 'form-control',
                
                ]) !!}

             <!--    @if ($errors->has('image'))
                 <span class="help-block">
                  <strong>{{ $errors->first('image') }}</strong>
                 </span>
                 @endif -->

    </div>

    <div class="form-group">
            <label for="{{ trans('admin.description') }}">{{ trans('admin.description') }}</label>
            {!! Form::textarea("description", null, [
                'class'       => 'form-control',
                'placeholder' => trans('admin.description'),
                'required'
                ]) !!}

             <!--    @if ($errors->has('description'))
                 <span class="help-block">
                  <strong>{{ $errors->first('description') }}</strong>
                 </span>
                 @endif
 -->
    



   <div class="form-group">
            <label for="{{ trans('admin.parent') }}">{{ trans('admin.parent') }}</label>
            {!! Form::select("parent_id",$cats, null, [
                'class' => 'form-control',
                ]) !!}
            <!--     @if ($errors->has('parent_id'))
                 <span class="help-block">
                  <strong>{{ $errors->first('parent_id') }}</strong>
                 </span>
                 @endif    -->   
    </div>


    <div class="form-group">
            <label for="{{ trans('admin.status') }}">{{ trans('admin.status') }}</label>
            {!! Form::select("status", null, [
                'class' => 'form-control',
                ]) !!}
              <!--   @if ($errors->has('status'))
                 <span class="help-block">
                  <strong>{{ $errors->first('status') }}</strong>
                 </span>
                 @endif   -->    
    </div>
   

  

