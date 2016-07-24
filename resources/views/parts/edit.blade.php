@extends('layouts.app')
@section('content')


>

@include('alerts.errors')

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{!! Form::model($part, [
    'method' => 'PATCH',
    'route' => ['parts.update', $part]
]) !!}

@include('parts.form')

{!! Form::submit('Update Part', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop