@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Двофакторна авторизація</h2>
        <form action="{{ route('2fa.verify') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="token">Введіть код з додатку Google Authenticator:</label>
                <input type="text" name="token" id="token" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Перевірити</button>
        </form>
    </div>
@endsection
