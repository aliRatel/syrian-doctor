@extends('layouts.app')


@section('content')

<div class="container-fluid padding mt-4 ">
    <div class=" text-center padding row  justify-content-center">
        <div class="col-md-8 " style="border-radius:5px; background-color: #4b4b4b13 ;padding: 2rem;">
            <h1 class=" my-h1 padding">Answer This Consultation</h1>
            <form method="post" action="{{ route('store-answer',['id'=>$consultation->id]) }}">
                <div>
                    @csrf



                    <div class="form-group row">
                        <label for="answer" style="color:black;" class="row-md-4 col-form-label text-md-right ">Enter Answer</label>
                        <textarea id="answer"  class="form-control" name="answer" rows="10" cols = "20" autofocus placeholder="enter your consultation answer here" required=true ></textarea>
                    </div>


                    <div class="form-group row">

                        <input  type="submit" class="form-control btn btn-primary " name="submit" autofocus value="Send Answer">
                    </div>



                </div>
            </form>
        </div>
    </div>
</div>
@endsection
