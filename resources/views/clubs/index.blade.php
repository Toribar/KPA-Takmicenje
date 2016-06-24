@extends ('layouts.master')

@section('header')

    <div class="header" style="padding-bottom: 30px;">
        <h3>Klubovi</h3>
        <small class="help-block">Spisak klubova</small>

        <a href="{{ route('clubs.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Prijavi klub
        </a>
    </div>

@stop

@section('content')

@foreach ($clubs as $club)
    <a href="{{ route('clubs.show', $club->id) }}" class="panel panel-default">
        <div class="panel-body">
             <small class="text-muted pull-right">{{ $club->getAssociation() }}</small>
            <div class="panel-body-item-header text-center">
                <h3>{{ $club->name }}</h3>
                <small class="text-muted">{{ $club->location }}</small>
            </div>
        </div>
    </a>
@endforeach
<div class="text-center">{{ $clubs->render() }}</div>

@stop
