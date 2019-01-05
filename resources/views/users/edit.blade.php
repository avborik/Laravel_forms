@extends('layout')

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($user, [
        'method' => 'PUT',
        'route' => ['users.update', $user->id]
    ]) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('password_confirmation', 'Password Confirmation') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
        </div>
        {{ Form::submit('Update', ['class' => 'btn btn-default']) }}

    {{ Form::close() }}

@stop