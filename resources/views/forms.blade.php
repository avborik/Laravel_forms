@extends('layout')

@section('content')

  {{-- Basic form --}}
  {{ Form::open(['url' => '/']) }}
  {{ Form::close() }}

  {{-- Change form method --}}
  {{ Form::open(['url' => '/', 'method' => 'GET']) }}
  {{ Form::close() }}

  {{-- Using route name istead of URL --}}
  {{ Form::open(['route' => 'home']) }}
  {{ Form::close() }}

  {{-- Using controller action instead of URL --}}
  {{ Form::open(['action' => 'UsersController@store']) }}
  {{ Form::close() }}

  {{-- Passing route parameters --}}
  {{ Form::open(['route' => ['users.show', 1]]) }}
  {{ Form::close() }}
  {{ Form::open(['action' => ['UsersController@show', 1]]) }}
  {{ Form::close() }}

  {{-- Accept file uploads --}}
  {{ Form::open(['route' => 'home', 'files' => true]) }}
  {{ Form::close() }}

  {{-- Manual CSRF protection --}}
  <form action="{{ route('home') }}">
      {{ csrf_field() }}
  </form>

@stop