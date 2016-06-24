@extends('layouts.master')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        Podaci o klubu<a class="btn btn-default btn-xs pull-right" href="{{ route('clubs.edit', $club->id) }}">Izmeni</a>
    </div>

    <div class="panel-body">
        <div class="row panel-body-item" style="padding-bottom: 20px">
            <div class="col-md-3 panel-body-item-header">Ime kluba</div>
            <div class="col-md-9">{{ $club->name }}</div>
        </div>

        <div class="row panel-body-item" style="padding-bottom: 20px">
            <div class="col-md-3 panel-body-item-header">Lokacija</div>
            <div class="col-md-9">{{ $club->location}}</div>
        </div>

        <div class="row panel-body-item" style="padding-bottom: 20px">
            <div class="col-md-3 panel-body-item-header">Asocijacija</div>
            <div class="col-md-9">{{ $club->getAssociation() }}</div>
        </div>
    </div>
</div>

@stop
