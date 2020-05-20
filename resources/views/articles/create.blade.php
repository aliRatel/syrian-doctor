@extends('layouts.app')

@section('content')

<div class="container-fluid padding mt-4 ">
    <div class=" text-center padding row  justify-content-center">
        <div class="col-md-8 " style="border-radius:5px; background-color: #4b4b4b13 ;padding: 2rem;">
            <h1 class=" my-h1 padding">Create A New Article</h1>
            <form method="POST" action="{{ route('store-article') }}" enctype="multipart/form-data">
                <div>
                    @csrf
                    <div class="form-group row">
                        <label for="name" style="color:black;" class="row-md-4 col-form-label text-md-right ">Article
                            name</label>
                        <input id="name" type="text" class="form-control" name="name" placeholder = "enter Article name"autofocus required=true>
                    </div>


                    <div class="form-group row">
                        <label for="content" style="color:black;" class="row-md-4 col-form-label text-md-right ">Article
                            content</label>
                        <textarea id="content"  class="form-control" name="content" rows="10" cols = "20" autofocus placeholder="enter Article content" required=true></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="img" style="color:black;" class="row-md-4 col-form-label text-md-right ">Article
                            Image</label>
                                            <input id="img"  class="form-control" type="file" name="img" accept="image/*">
                    </div>

                    <div class="form-group row">

                        <input  type="submit" class="form-control btn btn-primary " name="submit" autofocus value="Add">
                    </div>



                </div>
            </form>
        </div>
    </div>
</div>
@endsection
