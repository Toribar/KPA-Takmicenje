@extends('layouts.master')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Izmena podataka takmičara</div>

    <div class="panel-body">
        {{ Form::open(['url' => route('competitors.update', $competitor->id), 'method' => 'patch', 'class' => 'form-horizontal']) }}
            <div class="form-group {{ $errors->has('name') ? 'has-error' : null }}">
                <label class="col-md-3 control-label">Ime i prezime</label>

                <div class="col-md-6">
                    {{ Form::text('full_name', old('full_name', $competitor->full_name), ['class' => 'form-control']) }}

                    @if ($errors->has('full_name'))
                        <span class="help-block">{{ $errors->first('full_name') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Klub</label>

                <div class="col-md-6">
                    {{ Form::select('club_id', $clubs, null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Kategorija</label>

                <div class="col-md-6">
                    {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Redni broj</label>

                <div class="col-md-6">
                    {{ Form::number('serial', old('serial', $competitor->serial), ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <div class="row">
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block">Sačuvaj</button>
                        </div>

                        <div class="col-xs-6">
                            <a href="{{ route('competitors.index') }}" class="btn btn-default btn-block">Odustani</a>
                        </div>
                    </div>
                </div>
            </div>
        {{ Form::close() }}
    </div>

</div>

@if($competitor->time_sec)
    <div class="panel panel-default">
        <div class="panel-heading">Unesi ponovo vreme u sekundama</div>

        <div class="panel-body">
            {{ Form::open(['url' => route('competitors.update', $competitor->id), 'method' => 'patch', 'class' => 'form-horizontal']) }}
                <div class="form-group">
                    <label class="col-md-3 control-label">Vreme</label>

                    <div class="col-md-6">
                        {{ Form::text('time_sec', old('time_sec', $competitor->time_sec), ['class' => 'form-control']) }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button class="btn btn-info btn-block btn-sm" type="submit">Unesi</button>
                    </div>

                </div>
            {{ Form::close() }}
        </div>
    </div>
@endif

@stop
