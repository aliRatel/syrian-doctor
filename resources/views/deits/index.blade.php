@extends('layouts.app')
@section('content')
<div class="container-fluid padding my-4  ">
    <div class="col align-items-center">
        <h1 class="my-h1"> Deits</h1>
        <div class="row padding justify-content-center ml-4 ">

            @foreach ($deits as $deit)
@include('deits.deit_card',['deit'=>$deit])
            @endforeach


        </div>
@can('admin')
        <div class="my-fab" onclick="window.location='{{ route('create-deit') }}'"> + </div>
        @endcan
    </div>
    </div>
    @endsection
