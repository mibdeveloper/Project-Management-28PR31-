{{-- \resources\views\roles\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Roles')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-key"></i> {{__("Roles")}}

            <a href="{{ route('users.index') }}" class="btn btn-default pull-right">{{__("Users")}}</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">{{__("Permissions")}}</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>{{__("Role")}}</th>
                    <th>{{__("Permissions")}}</th>
                    <th>{{__("Operation")}}</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($roles as $role)
                    <tr>

                        <td>{{ $role->name }}</td>

                        <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                        <td>
                            <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">{{__("Edit")}}</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i> '. __("Delete"), array('type' => 'submit', 'class' => 'btn btn-danger')) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        <a href="{{ URL::to('roles/create') }}" class="btn btn-success">{{__("Add Role")}}</a>

    </div>
@endsection