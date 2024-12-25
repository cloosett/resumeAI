@extends('layouts.layout')

@section('content')
    <section class="module-cover parallax text-center fullscreen" data-background="{{asset('image/module-5.jpg')}}" data-overlay="0.6" style="background-image: none; z-index: 0;" data-jarallax-original-styles="background-image: {{asset('image/module-5.jpg')}};">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 m-auto">
                    <div class="m-b-20">
                        <h6>Sign into your account</h6>
                    </div>
                    <div class="m-b-20">
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" class="form-control" type="email" name="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input id="password" name="password" class="form-control" type="password" placeholder="Pasword">
                            </div>
                            <div class="block mt-3" style="text-align: left;padding-left: 5px">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ms-2 text-sm text-gray-600">Remember me</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-round btn-brand" type="submit">LOG IN</button>
                            </div>
                        </form>
                    </div>
                    <div class="m-b-20">
                        <p style="padding:0; margin:0"><small><a href="{{ route('register') }}">Dont have an account yet?</a></small></p>
                        <p><small><a href="{{ route('password.request') }}">Forgot password?</a></small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay-background" style="opacity: 0.6;"></div><div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;" id="jarallax-container-0"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: {{asset('image/module-5.jpg')}}; position: absolute; top: 0px; left: 0px; width: 100%; height: 965px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 0px; transform: translate3d(0px, 0px, 0px);"></div></div></section>
@endsection
