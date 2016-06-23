@extends('layouts.master')

@section('content')

@foreach ($categories as $category)
    <a href="#" class="panel panel-default">
        <div class="panel-body">
            <div class="panel-body-item-header text-center">
                <h3>{{ $category->name }}</h3>
            </div>
        </div>
    </a>
@endforeach

@stop
