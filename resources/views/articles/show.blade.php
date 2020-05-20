@extends('layouts.app')

@section('content')
<h1>{{$article->topic}}</h1>
<h3>{{$article->created_at}}</h3>
<p>{{$article->description}}</p>
@endsection
