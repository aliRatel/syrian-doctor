@extends('layouts.app')

@section('content')
<div class="container-fluid padding mt-4 ">
    <div class=" text-center padding row  justify-content-center">
        @can('user')

            <div class="col-md-8 " style="border-radius:5px; background-color: #4b4b4b13 ;padding: 2rem;">
                <h1 class=" my-h1 padding">Ask Any Question</h1>
                <h3 class="my-4">get your questions answered by professional doctors</h3>

                <form method="POST" action="{{ route('store-consultation') }}">
                    <div>
                        @csrf
                        <div class="form-group row">
                            <label for="name" style="color:black;"
                                class="row-md-4 col-form-label text-md-right ">Consultation
                                subject</label>
                            <input id="name" type="text" class="form-control" name="name"
                                placeholder="enter Consultation subject" autofocus required=true>
                        </div>


                        <div class="form-group row">
                            <label for="content" style="color:black;"
                                class="row-md-4 col-form-label text-md-right ">Consultation
                                content</label>
                            <textarea id="content" class="form-control" name="content" rows="5" cols="20" autofocus
                                placeholder="enter Consultation content" required=true></textarea>
                        </div>

<div class="form-group row">

    <div class="captcha">
        <span>{!! captcha_img() !!}</span>
        <button type="button" class="btn btn-success"id="refresh">refresh</button>
        </div>

</div>

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        {{$errors->first()}}      </div>

@endif
<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
             <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" required=true></div>
          </div>
                        <div class="form-group row">

                            <input type="submit" class="form-control btn btn-primary " name="submit" autofocus
                                value="Add">
                        </div>



                    </div>
                </form>
            </div>
        @endcan
        @can('user')
            <div class="container my-4">
                <h3> Or see your previous question and their answers</h3>
                <button class="btn btn-success"
                    onclick="window.location='{{ route('Consultations') }}'">GO</button>
            </div>
        @endcan
        @can('admin')
        <div class="container my-4">
            <h3> view and answer consultations</h3>
            <button class="btn btn-success"
                onclick="window.location='{{ route('Consultations') }}'">GO</button>
        </div>
        @endcan
    </div>

</div>

@endsection
