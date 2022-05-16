@extends('template')

@section('title', 'My Blog')
@section('description', 'Site Desc.')

@include('layouts.head')

@include('layouts.nav-header')

@section('content')
<div id="app">
<header-component></header-component>
<example-component></example-component>
<router-view></router-view>
</div>
@endsection

@include('layouts.footer')
