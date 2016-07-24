@extends('layouts.app')
@section('content')
<div class="form-group col-md-12">

{!! Form::open()!!}
  @include('parts.form')

  {!!link_to('#',$title = 'Registrar', $attributes = ['id'=>'registro','class'=>'btn btn-primary'], $secure = null )!!}


 <a href="{!!('/parts')!!}" class="">{!!Form::submit('Enviar',['class'=>'btn btn-outline dark'])!!}</a>
                                           
{!! Form::close() !!}


</div>
@endsection