{{-- \resources\views\roles\edit.blade.php --}}


@extends('layouts.app')

@section('title', '| Edit Role')

@section('content')

    <div class='col-lg-4 col-lg-offset-4'>
        <h1><i class='fa fa-key'></i> {{__("Edit Role")}}: {{$role->name}}</h1>
        <hr>

        {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', __('Role Name')) }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <h5><b>{{__("Assign Permissions")}}</b></h5>
        @foreach ($permissions as $permission)

            {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
            {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

        @endforeach
        <br>
        {{ Form::submit(__('Edit'), array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    </div>

@endsection