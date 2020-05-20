@extends('layouts.app')

@section('content')

<div class="container-fluid padding mt-4 ">
    <div class=" text-center padding row  justify-content-center">
        <div class="col-md-8 " style="border-radius:5px; background-color: #4b4b4b13 ;padding: 2rem;">
            <h1 class=" my-h1 padding">Ask Any Question</h1>
            <h3 class="my-4">get your questions answered by professional doctors</h3>

            <form method="POST" action="{{ route('store-consultation') }}">
                <div>
                    @csrf
                    <div class="form-group row">
                        <label for="name" style="color:black;" class="row-md-4 col-form-label text-md-right ">Consultation
                            subject</label>
                        <input id="name" type="text" class="form-control" name="name" placeholder = "enter Consultation subject"autofocus required=true>
                    </div>


                    <div class="form-group row">
                        <label for="content" style="color:black;" class="row-md-4 col-form-label text-md-right ">Consultation
                            content</label>
                        <textarea id="content"  class="form-control" name="content" rows="5" cols = "20" autofocus placeholder="enter Consultation content" required=true></textarea>
                    </div>


                    <div class="form-group row">

                        <input  type="submit" class="form-control btn btn-primary " name="submit" autofocus value="Add">
                    </div>



                </div>
            </form>
        </div>
        <div class="container my-4">
            <h3>   Or see your previous question and their answers</h3>
        <button class="btn btn-success" onclick="window.location='{{route('Consultations')}}'">GO</button>
           </div>
    </div>

</div>

@endsection
