@extends('layouts.master')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Unos novog kluba</div>

        <div class="panel-body">
            {{ Form::open(['url' => route('clubs.store'), 'method' => 'post', 'class' => 'form-horizontal']) }}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : null }}">
                    <label class="col-md-3 control-label">Ime kluba</label>

                    <div class="col-md-6">
                        {{ Form::text('name', null, ['class' => 'form-control']) }}

                        @if ($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('location') ? 'has-error' : null }}">
                    <label class="col-md-3 control-label">Lokacija</label>

                    <div class="col-md-6">
                        {{ Form::text('location', null, ['class' => 'form-control']) }}

                        @if ($errors->has('location'))
                            <span class="help-block">{{ $errors->first('location') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Asocijacija</label>

                    <div class="col-md-6">
                        {{ Form::select('association', trans('clubs.association'), null, ['class' => 'form-control']) }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row">
                            <div class="col-xs-6">
                                <button type="submit" class="btn btn-primary btn-block">Sačuvaj</button>
                            </div>

                            <div class="col-xs-6">
                                <a href="{{ route('clubs.index') }}" class="btn btn-default btn-block">Odustani</a>
                            </div>
                        </div>
                    </div>
                </div>

            {{ Form::close() }}
        </div>

    </div>

@stop
