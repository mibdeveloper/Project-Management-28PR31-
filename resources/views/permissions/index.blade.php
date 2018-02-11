{{-- \resources\views\permissions\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Permissions')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-key"></i>{{trans("messages.Available Permissions")}}

            <a href="{{ route('users.index') }}" class="btn btn-default pull-right">{{trans("messages.Users")}}</a>
            <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">{{trans("messages.Roles")}}</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>{{trans("messages.Permission")}}</th>
                    <th>{{trans("messages.Operation")}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">{{trans("messages.Edit")}}</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i> '. trans("messages.Delete"), array('type' => 'submit', 'class' => 'btn btn-danger')) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">{{trans("messages.Add Permission")}}</a>

    </div>

@endsection