@extends('layouts.main')
@section('content')
    <h2> all todos list </h2>
    @foreach($todo_lists as $list)
        <h4> {{ link_to('todos.show', $list->name, [$list->id]) }} </h4>
    @endforeach
@stop