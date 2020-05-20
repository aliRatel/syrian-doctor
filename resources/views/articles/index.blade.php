@extends('layouts.app')
@section('content')
<div class="container-fluid padding my-4  ">
    <div class="col align-items-center">
        <h1 class="my-h1"> Articles</h1>
        <div class="row padding justify-content-center ml-4 ">

            @foreach ($articles as $article)
            @include('medical_card',['article'=>$article])
                  @endforeach
        </div>

        <div class="my-fab" onclick="window.location='{{ route('create-article') }}'"> + </div>
    </div>
    </div>
    @endsection
