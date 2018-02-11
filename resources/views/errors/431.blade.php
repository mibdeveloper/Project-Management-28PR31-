@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {{trans("messages.431 Request Header Fields Too Large")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection