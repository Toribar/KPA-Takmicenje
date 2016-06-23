@extends ('layouts.master')

@section('header')

    <div class="header" style="padding-bottom: 30px;">
        <h3>Kategorije</h3>
        <small class="help-block">Lista kategorija</small>

        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Unesi kategoriju
        </a>
    </div>

@stop

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
<div class="text-center">{{ $categories->render() }}</div>

@stop
