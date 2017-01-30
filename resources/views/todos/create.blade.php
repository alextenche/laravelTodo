@extends('layouts.main')
@section('content')

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <small class="alert-box alert" style="color: red"> {{ $error }} </small>
        @endforeach
    @endif

    {{ Form::open( array('route' => 'todos.store') ) }}
        {{ Form::label('title', 'List Title') }}
        {{ Form::text('title') }}
        {{ Form::submit('submit', array('class' => 'button')) }}
    {{ Form::close() }}
@stop