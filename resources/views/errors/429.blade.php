@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {{__("429 Too Many Requests")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection