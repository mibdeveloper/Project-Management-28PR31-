{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Users')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> {{__("messages.User Administration")}} <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">{{__("messages.Roles")}}</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">{{__("messages.Permissions")}}</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>{{__("messages.Name")}}</th>
                    <th>{{__("messages.Email")}}</th>
                    <th>{{__("messages.Date/Time Added")}}</th>
                    <th>{{__("messages.User Roles")}}</th>
                    <th>{{__("messages.Operations")}}</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($users as $user)
                    <tr>

                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                        <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">{{__("messages.Edit")}}</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i> '. __("messages.Delete"), array('type' => 'submit', 'class' => 'btn btn-danger')) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        <a href="{{ route('users.create') }}" class="btn btn-success">{{__("messages.Add User")}}</a>

    </div>

@endsection