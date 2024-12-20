@extends('layouts.layout')

@section('content')
    <section class="module-cover parallax text-center fullscreen" data-background="assets/images/module-5.jpg" data-overlay="0.6" style="background-image: none; z-index: 0;" data-jarallax-original-styles="background-image: url(&quot;assets/images/module-5.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 m-auto">
                    <div class="m-b-20">
                        <h6>Create a new account</h6>
                    </div>
                    <div class="m-b-20">
                        <form method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input id="name" class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input id="email" class="form-control" type="email" name="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input id="password" name="password" class="form-control" type="password" placeholder="Pasword">
                            </div>
                            <div class="form-group">
                                <input id="password_confirmation" name="password_confirmation" class="form-control" type="password" placeholder="Confirm password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-round btn-brand" type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="m-b-20">
                        <p><small><a href="{{ route('login') }}">Already registered?</a></small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay-background" style="opacity: 0.6;"></div><div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;" id="jarallax-container-0"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;https://offsetcode.com/themes/boomerang/1.3.1/assets/images/module-5.jpg&quot;); position: absolute; top: 0px; left: 0px; width: 1680px; height: 965px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 0px; transform: translate3d(0px, 0px, 0px);"></div></div></section>
@endsection
