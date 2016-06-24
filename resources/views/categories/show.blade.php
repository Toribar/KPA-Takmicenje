@extends('layouts.master')

@section('header')

<div class="header" style="padding-bottom: 30px;">
    <h3>{{ $category->name }}</h3>
    <small class="help-block">Rang lista</small>

</div>

@stop

@section('content')

@foreach ($competitors as $competitor)
    <a href="{{ route('competitors.show', $competitor->id) }}" class="panel panel-default">
        <div class="panel-body">
            <div class="media">
                <div class="media-left">
                    <img width="64" class="media-object img-circle" data-src="holder.js/64x64?text={{ $competitor->rang }}">
                </div>

                <div class="media-body">
                    <small class="text-muted pull-right">{{ gmdate("H:i:s", $competitor->time_sec) }}</small>
                    <h4 class="media-heading text-primary">{{ $competitor->full_name }}</h4>
                    <div class="text-muted">
                        {{ $competitor->club->name }}
                    </div>
                </div>
            </div>
        </div>
    </a>
@endforeach

@stop

