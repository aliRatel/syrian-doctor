@extends('layouts.app')

@section('content')
<!-- sliders -->
<div id="slides" class="carousel slide" data-ride="carousel" data-interval="3000">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>

    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/slides/main.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Heart Doctor</h1>
                @guest


                <h3>Join Us Now</h3>
                    <button type="button"
                    class="btn btn-outline-dark btn-lg " onclick="window.location='{{ route('login') }}'">{{ __('auth.Login') }}</button>
                <button type="button"
                    class="btn btn-primary btn-lg " onclick="window.location='{{ route('register') }}'">{{ __('auth.Register') }}</button>
                    @endguest
                    @auth
                    <h3>Welcome  {{ Auth::user()->name }}</h3>
                    @endauth
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slides/article.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Read Our latest Articles</h1>
                <h3>the best place to keep your heart healty</h3>
                <button type="button" class="btn btn-primary btn-lg ">go to Articles</button>

            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slides/consult.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Consultation</h1>
                <h3>ask any question and get it answered fast by a highly skilled team of doctors</h3>
                <button type="button" class="btn btn-primary btn-lg ">Contact Us</button>

            </div>
        </div>
    </div>

</div>

<!-- jumbotron -->
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10 ">
            <p class="lead">Get every thing you need to stay healthy since we provide you with the best Articles deits
                infromation and consultations ,all that for free</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 ">
            <a href={{ route('Articles') }}><button type="button"
                    class="btn btn-outline-secondary">explore</button></a>
        </div>
    </div>
</div>
<!-- welcome section -->

<div class=" container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">BUILT WITH LOVE</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead"></p>
        </div>
    </div>

    <!-- three column section -->

    <div class="container-fluid padding">
        <div class="row text-center padding">

            <div class="col-xs-12 col-sm-6 col-md-4" style="cursor: pointer;" onclick="window.location='{{ route('Articles') }}'">
                <i class="far fa-newspaper"></i>

                <h3>Articles</h3>
                <p>read our latest articles</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4" style="cursor: pointer;" onclick="window.location='{{ route('Deits') }}'">
                <i class="fas fa-apple-alt"></i>
                <h3>Deits</h3>
                <p>discover our most effective deits</p>



            </div>
            <div class="col-xs-12 col-sm-6 col-md-4" style="cursor: pointer;" onclick="window.location='{{ route('Contact Us') }}'">
                <i class="fas fa-question"></i>

                <h3>consultations</h3>
                <p>have a question , go ahead and ask </p>

            </div>
        </div>
        <hr class="my-4">
    </div>
    @endsection
