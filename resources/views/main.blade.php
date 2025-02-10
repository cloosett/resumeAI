@extends('layouts.layout')

@section('content')
    <section class="module-small">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-card" style="margin-top: 18%;">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="profile-picture mb-2">
                                    @if(auth()->user() && auth()->user()->resume && auth()->user()->resume->profile_picture == null)
                                        <img src="{{ asset('image/default-user.jpg') }}" width="150" height="150" alt="Profile Picture" class="img-fluid rounded-circle">
                                    @elseif(auth()->user() && auth()->user()->resume && auth()->user()->resume->profile_picture)
                                        <img src="{{ asset('storage/' . auth()->user()->resume->profile_picture) }}" width="150" height="150" alt="Profile Picture" class="img-fluid rounded-circle">
                                    @else
                                        <img src="{{ asset('image/default-user.jpg') }}" width="150" height="150" alt="Profile Picture" class="img-fluid rounded-circle">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8 text-center">
                                <h3>{{ auth()->user()->name ?? 'Не вказано' }}</h3>
                                <p><strong>Email:</strong> {{ auth()->user()->email ?? 'Не вказано' }}</p>

                                <p><strong>Телефон:</strong>
                                    {{ auth()->user()->resume->phone ?? 'Не вказано' }}
                                </p>

                                <p><strong>Локація:</strong>
                                    {{ auth()->user()->resume->location ?? 'Не вказано' }}
                                </p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <h4>Навички</h4>
                                <p>
                                    {{ auth()->user()->resume->skills ?? 'Не вказано' }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h4>Освіта</h4>
                                <p>
                                    {{ auth()->user()->resume->education ?? 'Не вказано' }}
                                </p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <h4>Соціальні мережі</h4>
                                <p>
                                <ul>
                                    <li>
                                        <strong>Facebook:</strong>
                                        @if(auth()->user()->resume && auth()->user()->resume->facebook)
                                            <a href="{{ auth()->user()->resume->facebook }}" target="_blank" class="btn btn-facebook">Переглянути</a>
                                        @else
                                            <span>Не вказано</span>
                                        @endif
                                    </li>
                                    <li>
                                        <strong>LinkedIn:</strong>
                                        @if(auth()->user()->resume && auth()->user()->resume->linkedin)
                                            <a href="{{ auth()->user()->resume->linkedin }}" target="_blank" class="btn btn-linkedin">Переглянути</a>
                                        @else
                                            <span> Не вказано</span>
                                        @endif
                                    </li>

                                    <li>
                                        <strong>Twitter:</strong>
                                        @if(auth()->user()->resume && auth()->user()->resume->twitter)
                                            <a href="{{ auth()->user()->resume->twitter }}" target="_blank" class="btn btn-twitter">Переглянути</a>
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
                                    {{ auth()->user()->resume->languages ?? 'Не вказано' }}
                                </p>
                            </div>
                        </div>

                        <div class="text-center" style="margin: 100px 0 100px 0;">
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary mr-2">Редагувати профіль</a>
                            <a href="{{ route('2fa.enable') }}" class="btn btn-dark">Додати 2FA</a>
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
