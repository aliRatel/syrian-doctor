@extends('layouts.app')

@section('content')
<div class="container my-4 py-4">
    <div class="card align-items-center">
<h1 class="my-h1 my-4">{{$deit->name}}</h1>
<hr class="light">
<h3 class="my-4 ">{{$deit->created_at}}</h3>
<p class="my-4">{{$deit->content}}</p>
    </div>
</div>
@endsection
