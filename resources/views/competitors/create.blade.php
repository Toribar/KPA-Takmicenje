@extends('layouts.master')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Unos novog takmičara</div>

    <div class="panel-body">
        {{ Form::open(['url' => route('competitors.store'), 'method' => 'post', 'class' => 'form-horizontal']) }}
            <div class="form-group {{ $errors->has('name') ? 'has-error' : null }}">
                <label class="col-md-3 control-label">Ime i prezime</label>

                <div class="col-md-6">
                    {{ Form::text('full_name', null, ['class' => 'form-control']) }}

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
                    {{ Form::number('serial', $nextSerial, ['class' => 'form-control']) }}
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

@stop
