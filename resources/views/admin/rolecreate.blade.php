@extends('admin.layout.layout')

@section('content')
    <div class="container mt-4">
        <h2>Create New Role</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{route('admin.rolestore')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
                @error('role')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save Role</button>
        </form>
    </div>
@endsection
