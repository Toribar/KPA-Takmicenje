@extends ('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Podaci o takmičaru <a class="btn btn-default btn-xs pull-right" href="{{ route('competitors.edit', $competitor->id) }}">Izmeni</a>
        </div>

        <div class="panel-body">
            <div class="row panel-body-item" style="padding-bottom: 20px">
                <div class="col-md-3 panel-body-item-header">Ime i prezime</div>
                <div class="col-md-9">{{ $competitor->full_name }}</div>
            </div>

            <div class="row panel-body-item" style="padding-bottom: 20px">
                <div class="col-md-3 panel-body-item-header">Kategorija</div>
                <div class="col-md-9">{{ $competitor->category->name }}</div>
            </div>

            <div class="row panel-body-item" style="padding-bottom: 20px">
                <div class="col-md-3 panel-body-item-header">Klub</div>
                <div class="col-md-9">{{ $competitor->club->name }}</div>
            </div>

            <div class="row panel-body-item" style="padding-bottom: 20px">
                <div class="col-md-3 panel-body-item-header">Redni broj</div>
                <div class="col-md-9">{{ $competitor->serial }}</div>
            </div>

            @if ($competitor->time_sec)
                <div class="row panel-body-item" style="padding-bottom: 20px">
                    <div class="col-md-3 panel-body-item-header">Vreme</div>
                    <div class="col-md-9">{{ gmdate("H:i:s", $competitor->time_sec) }}</div>
                </div>
            @endif

        </div>
    </div>

    @if (!$competitor->time_sec)
        <div class="header">
            <h3>Vreme</h3>
            <small class="help-block">Upisi vreme u sekundama</small>
        </div>

        {{ Form::open(['url' => route('competitors.update', $competitor->id), 'method' => 'patch', 'class' => 'form-horizontal']) }}
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    {{ Form::number('time_sec', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <button class="btn btn-info btn-sm btn-block" type="submit">Potvrdi vreme</button>
                </div>
            </div>


        {{ Form::close() }}
    @endif
@stop
