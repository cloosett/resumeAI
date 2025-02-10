@extends('layouts.layout')

@section('content')
    <section class="module">
        <div class="container">
            <h2>Налаштування двофакторної авторизації</h2>
            <p>Для активації двофакторної авторизації, відскануйте цей QR-код у вашому додатку Google Authenticator:</p>

            <div>
                <img src="{{ $qrCodeUrl }}" alt="QR Code">
            </div>

        </div>
    </section>
@endsection

