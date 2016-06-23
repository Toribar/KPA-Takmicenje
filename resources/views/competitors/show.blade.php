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
        </div>
    </div>
@stop
