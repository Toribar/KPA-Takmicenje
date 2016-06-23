@extends('layouts.master')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Unos nove kategorije</div>

    <div class="panel-body">
        {{ Form::open(['url' => route('categories.store'), 'method' => 'post', 'class' => 'form-horizontal']) }}
            <div class="form-group {{ $errors->has('name') ? 'has-error' : null }}">
                <label class="col-md-3 control-label">Kategorija - pun naziv</label>

                <div class="col-md-6">
                    {{ Form::text('name', null, ['class' => 'form-control']) }}

                    @if ($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
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
