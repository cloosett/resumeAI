@extends('admin.layout.layout')

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-12 d-flex justify-content-between">
                <form action="#" method="GET">
                    <div>
                        <input type="text" name="search" class="form-control" placeholder="Search..." id="searchInput">
                    </div>
                </form>
                <div>
                    <a href="{{route('admin.rolecreate')}}" class="btn btn-success">
                        <i class="fa fa-plus"></i>Add New Role
                    </a>
                </div>
            </div>
        </div>

        <!-- Таблиця -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">
                        <a href="#" style="color: black; text-decoration: none">
                            ID
                        </a>
                    </th>
                    <th scope="col">
                        <a href="#" style="color: black; text-decoration: none">
                            NAME
                        </a>
                    </th>
                    <th scope="col">
                        <a href="#" style="color: black; text-decoration: none">
                            CREATED AT
                        </a>
                    </th>
                    <th scope="col">ACTIONS</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <th scope="row"><a href="#" class="text-decoration-none text-dark">{{ $role->id }}</a></th>
                        <td><a href="#" class="text-decoration-none text-dark">{{ $role->name }}</a></td>
                        <td><a href="#" class="text-decoration-none text-dark">{{ $role->created_at }}</a></td>
                        <td>
                            <a href="{{route('admin.roleedit', $role->id)}}" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <form action="{{route('admin.roledelete', $role)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $roles->onEachSide(0)->links('pagination::bootstrap-5') }}
    </div>
@endsection
