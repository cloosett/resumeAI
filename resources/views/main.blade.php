@extends('layouts.layout')

@section('content')
    <section class="module-small">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-card" style="margin-top: 18%;">
                        <!-- User Info -->
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="profile-picture mb-2">
                                    <img src="{{ auth()->user()->profile_picture ?? asset('image/default-user.jpg') }}" width="150" height="150" alt="Profile Picture" class="img-fluid rounded-circle">
                                </div>
                            </div>
                            <div class="col-md-8 text-center">
                                <h3>{{ auth()->user()->name }}</h3>
                                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>

                                <!-- Phone -->
                                <p><strong>Телефон:</strong>
                                    {{ auth()->user()->phone ?? 'Не вказано' }}
                                </p>

                                <!-- Location -->
                                <p><strong>Локація:</strong>
                                    {{ auth()->user()->location ?? 'Не вказано' }}
                                </p>
                            </div>
                        </div>

                        <hr>

                        <!-- Skills & Education -->
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Навички</h4>
                                <p>
                                @if(empty(auth()->user()->skills))
                                    <p>Не вказано</p>
                                @else
                                    <ul>
                                        @foreach(auth()->user()->skills as $skill)
                                            <li>{{ $skill }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h4>Освіта</h4>
                                @if(empty(auth()->user()->education))
                                    <p>Не вказано</p>
                                @else
                                    <ul>
                                        @foreach(auth()->user()->education as $education)
                                            <li>{{ $education }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <!-- Social Media -->
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Соціальні мережі</h4>
                                <p>
                                <ul>
                                    <li>
                                        <strong>Facebook:</strong>
                                        @if(auth()->user()->facebook)
                                            <a href="{{ auth()->user()->facebook }}" target="_blank" class="btn btn-facebook">Переглянути</a>
                                        @else
                                            <span> Не вказано</span>
                                        @endif
                                    </li>

                                    <li>
                                        <strong>LinkedIn:</strong>
                                        @if(auth()->user()->linkedin)
                                            <a href="{{ auth()->user()->linkedin }}" target="_blank" class="btn btn-linkedin">Переглянути</a>
                                        @else
                                            <span> Не вказано</span>
                                        @endif
                                    </li>

                                    <li>
                                        <strong>Twitter:</strong>
                                        @if(auth()->user()->twitter)
                                            <a href="{{ auth()->user()->twitter }}" target="_blank" class="btn btn-twitter">Переглянути</a>
                                        @else
                                            <span> Не вказано</span>
                                        @endif
                                    </li>
                                </ul>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h4>Мови</h4>
                                <p>
                                    @if(auth()->user()->languages)
                                        @foreach(auth()->user()->languages as $language)
                                            <span>{{ $language }}</span>
                                        @endforeach
                                    @else
                                        <span>Не вказано</span>
                                    @endif
                                </p>
                            </div>
                        </div>

                        <!-- Edit Profile Button -->
                        <div class="text-center" style="margin: 100px 0 100px 0;">
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Редагувати профіль</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var header = document.querySelector('.header.header-transparent');
            var logo = document.querySelector('.inner-brand');
            if (header) {
                header.style.backgroundColor = 'white';
                header.style.top = '0';
                logo.style.color = 'black';

            }
            var links = document.querySelectorAll('.header.header-transparent .inner-nav > ul > li > a');

            links.forEach(function(link) {
                link.style.color = 'black';
            });

        });
    </script>
@endsection
