@extends('admin.layout.layout')

@section('content')
    <div class="container mt-4">
        <h2>Update Role</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{route('admin.roleupdate', $role->id)}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" id="role" name="role" placeholder="Role Name" value="{{$role->name}}">
                @error('role')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Role</button>
        </form>
    </div>
@endsection
