{{ auth()->guard('admin')->user()->name}}
@extends('adminlte::page')

@section('title', 'Administrador do Sistema')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>You are logged in!</p>
@stop