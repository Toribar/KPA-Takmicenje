@extends ('layouts.master')
@section('header')

<div class="header" style="padding-bottom: 30px;">
    <h3>Takmičari</h3>
    <small class="help-block">Lista takmičara</small>

    <a href="{{ route('competitors.create') }}" class="btn btn-primary">
        <i class="fa fa-plus"></i> Prijavi takmičara
    </a>
</div>

@stop

@section('content')

@foreach ($competitors as $competitor)
    <a href="{{ route('competitors.show', $competitor->id) }}" class="panel panel-default">
        <div class="panel-body">
            <div class="media">
                <div class="media-left">
                    <img width="64" class="media-object img-circle" data-src="holder.js/64x64?text={{ $competitor->id }}">
                </div>

                <div class="media-body">
                    <small class="text-muted pull-right">{{ $competitor->time_sec }}</small>
                    <h4 class="media-heading text-primary">{{ $competitor->full_name }}</h4>
                    <div class="text-muted">
                        {{ $competitor->club->name }}
                    </div>
                    <div>{{ $competitor->gender }}</div>
                </div>
            </div>
        </div>
    </a>
@endforeach

@stop
