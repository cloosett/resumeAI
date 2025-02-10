@extends('admin.layout.layout')

@section('content')
    <div class="container mt-4">
        <h2>Create New Author</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{route('admin.authorstore')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="author" class="form-label">Автор</label>
                <select class="form-control" id="author" name="author">
                    <option value="">Оберіть користувача</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('author')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create New Author</button>
        </form>
    </div>
@endsection
