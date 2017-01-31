@extends('layouts.main')
@section('content')

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <small class="alert-box alert" style="color: red"> {{ $error }} </small>
        @endforeach
    @endif
    {{ Form::model($list, ['route' => ['todos.update', $list->id], 'method' => 'PUT']) }}
    {{ Form::label('name', 'List Title') }}
    {{ Form::text('name') }}
    {{ Form::submit('update', array('class' => 'button')) }}
    {{ Form::close() }}
@stop