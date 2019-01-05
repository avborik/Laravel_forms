@extends('layout')

@section('content')

  {{ Form::open(['url' => '/']) }}

    {{-- Plain label --}}
    {{ Form::label('email', 'E-mail Address') }}
    {{-- Label with extra HTML attributes --}}
    {{ Form::label('email', 'E-mail Address', ['class' => 'some-sick-label']) }}

    {{-- Text Input --}}
    {{ Form::text('username') }}
    {{-- Text input with default value and a class --}}
    {{ Form::text('username', 'default-value', ['class' => 'form-control']) }}

    {{-- Hidden field --}}
    {{ Form::hidden('something_fancy') }}

    {{-- Textarea --}}
    {{ Form::textarea('message') }}
    {{-- Textarea optimized for bootstrap --}}
    {{ Form::textarea('message', 'default message', ['class' => 'form-control']) }}

    {{-- Password field --}}
    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'This is a placeholder']) }}

    {{-- Email field --}}
    {{ Form::email('email', 'Email address', ['class' => 'form-control']) }}

    {{-- File input --}}
    {{ Form::file('profile_image', ['class' => 'something-pretty']) }}

    {{-- Checkbox --}}
    {{ Form::checkbox('name', 'value') }}
    {{-- Radio button --}}
    {{ Form::radio('name', 'value') }}
    {{-- Radio button checked --}}
    {{ Form::radio('name', 'value', true) }}

    {{-- Number --}}
    {{ Form::number('name', 'value') }}

    {{-- Date --}}
    {{ Form::date('name', \Carbon\Carbon::now()) }}

    {{-- Drop-down --}}
    {{ Form::select('size', ['L' => 'Large', 'S' => 'Small']) }}
    {{--Drop-down with default value selected --}}
    {{ Form::select('size', ['L' => 'Large', 'S' => 'Small'], 'S') }}
    {{-- Drop-down with placeholder instead of default value --}}
    {{ Form::select('size', ['L' => 'Large', 'S' => 'Small'] , null, ['placeholder' => 'Pick a size']) }}
    {{-- Drop-down grouped list --}}
    {{ Form::select('animal', [
        'Cats' => ['leopard' => 'Leopard'],
        'Dogs' => ['spaniel' => 'Spaniel'],
    ]) }}
    {{-- Drop-down list with range --}}
    {{ Form::selectRange('number', 10, 20) }}
    {{-- Drop-down list with month names --}}
    {{ Form::selectMonth('month') }}

    {{-- Submit button --}}
    {{ Form::submit('Send') }}
    {{-- Normal button with bootstrap styling --}}
    {{ Form::button('Click me!', ['class' => 'btn btn-primary']) }}

    {{-- Form Macro --}}
    {!! Form::superSecretHiddenField() !!}

    {{ Form::textField('name') }}

  {{ Form::close() }}

@stop