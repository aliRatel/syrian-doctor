@extends('layouts.app')

@section('title')
<title>Categories</title>
@endsection

@section('content')


        <div class="container  " >

        <div class="row d-flex justify-content-center mb-4"><h1></h1></div>
        <div class='row'>
        @include('medical_card')
        @include('medical_card')
        @include('medical_card')
        </div>


@endsection
