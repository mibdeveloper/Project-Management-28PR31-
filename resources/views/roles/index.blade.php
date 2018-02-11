{{-- \resources\views\roles\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Roles')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-key"></i> {{trans("messages.Roles")}}

            <a href="{{ route('users.index') }}" class="btn btn-default pull-right">{{trans("messages.Users")}}</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">{{trans("messages.Permissions")}}</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>{{trans("messages.Role")}}</th>
                    <th>{{trans("messages.Permissions")}}</th>
                    <th>{{trans("messages.Operation")}}</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($roles as $role)
                    <tr>

                        <td>{{ $role->name }}</td>

                        <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                        <td>
                            <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">{{trans("messages.Edit")}}</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i> '. trans("messages.Delete"), array('type' => 'submit', 'class' => 'btn btn-danger')) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        <a href="{{ URL::to('roles/create') }}" class="btn btn-success">{{trans("messages.Add Role")}}</a>

    </div>
@endsection