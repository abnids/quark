@extends('layouts.app2')
@section('content')
<div class="class col-md-12">
{!! Form::open(['route'=>'parts.store','method'=>'POST']) !!}
  @include('parts.form')
  
 <a href="{!!('/parts')!!}" class="">{!!Form::submit('Enviar',['class'=>'btn btn-outline dark'])!!}</a>
                                           
{!! Form::close() !!}
</div>
@endsection