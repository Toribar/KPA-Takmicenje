@extends ('layouts.master')

@section('header')

    <div class="header" style="padding-bottom: 30px;">
        <h3>Rezultati</h3>
        <small class="help-block">Kategorije</small>
    </div>

@stop

@section('content')

    @foreach ($categories as $category)
        <a href="{{ route('categories.show', $category->id) }}" class="panel panel-default">
            <div class="panel-body">
                <div class="panel-body-item-header text-center">
                    <h3>{{ $category->name }}</h3>
                </div>
            </div>
        </a>
    @endforeach
    <div class="text-center">{{ $categories->render() }}</div>

@stop
