@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="my-h1 py-4 mt-4">Consultations</h1>
    <hr class="light">
    <ul>
        @foreach ($consultations as $consultation)
        @include('consultations.consultation_row',['consultation'=>$consultation])
        @endforeach
    </ul>
</div>

<div>

    @endsection
