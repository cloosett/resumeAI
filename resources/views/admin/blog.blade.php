@extends('admin.layout.layout')

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-12 d-flex justify-content-between">
                <form action="{{ route('admin.blog') }}" method="GET">
                    <div>
                        <input type="text" name="search" class="form-control" placeholder="Search..." id="searchInput">
                    </div>
                </form>
                <div>
                    <a href="{{route('admin.blogcreate')}}" class="btn btn-success">
                        <i class="fa fa-plus"></i>Add New Blog
                    </a>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">
                        <a href="{{ route('admin.blog', ['sort' => 'id', 'direction' => request('direction') == 'desc' ? 'asc' : 'desc']) }}" style="color: black; text-decoration: none">
                            ID
                            @if ($sortColumn == 'id')
                                @if ($sortDirection == 'asc')
                                    <span>&#8593;</span>
                                @else
                                    <span>&#8595;</span>
                                @endif
                            @endif
                        </a>
                    </th>
                    <th scope="col">
                        <a href="{{ route('admin.blog', ['sort' => 'title', 'direction' => request('direction') == 'desc' ? 'asc' : 'desc']) }}" style="color: black; text-decoration: none">
                            TITLE
                            @if ($sortColumn == 'name')
                                @if ($sortDirection == 'asc')
                                    <span>&#8593;</span>
                                @else
                                    <span>&#8595;</span>
                                @endif
                            @endif
                        </a>
                    </th>
                    <th scope="col">
                        <a href="{{ route('admin.blog', ['sort' => 'slug', 'direction' => request('direction') == 'desc' ? 'asc' : 'desc']) }}" style="color: black; text-decoration: none">
                            SLUG
                            @if ($sortColumn == 'slug')
                                @if ($sortDirection == 'asc')
                                    <span>&#8593;</span>
                                @else
                                    <span>&#8595;</span>
                                @endif
                            @endif
                        </a>
                    </th>
                    <th scope="col">
                        <a href="{{ route('admin.blog', ['sort' => 'status', 'direction' => request('direction') == 'desc' ? 'asc' : 'desc']) }}" style="color: black; text-decoration: none">
                            STATUS
                        </a>
                    </th>
                    <th scope="col">
                        <a href="{{ route('admin.blog', ['sort' => 'created_at', 'direction' => request('direction') == 'desc' ? 'asc' : 'desc']) }}" style="color: black; text-decoration: none">
                            CREATED AT
                            @if ($sortColumn == 'created_at')
                                @if ($sortDirection == 'asc')
                                    <span>&#8593;</span>
                                @else
                                    <span>&#8595;</span>
                                @endif
                            @endif
                        </a>
                    </th>
                    <th scope="col">ACTIONS</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <th scope="row"><a href="{{route('admin.blogedit', $blog->id)}}" class="text-decoration-none text-dark">{{ $blog->id }}</a></th>
                        <td><a href="{{route('admin.blogedit', $blog->id)}}" class="text-decoration-none text-dark">{{ $blog->title }}</a></td>
                        <td><a href="{{route('admin.blogedit', $blog->id)}}" class="text-decoration-none text-dark">{{ $blog->slug }}</a></td>
                        <td><a href="{{route('admin.blogedit', $blog->id)}}" class="text-decoration-none text-dark">{{ $blog->status }}</a></td>
                        <td><a href="{{route('admin.blogedit', $blog->id)}}" class="text-decoration-none text-dark">{{ $blog->created_at }}</a></td>
                        <td>
                            <a href="{{route('admin.blogedit', $blog->id)}}" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <form action="{{route('admin.blogdelete', $blog->id)}}" method="POST" style="display:inline-block;">
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
        {{ $blogs->appends(['search' => $search, 'sort' => $sortColumn, 'direction' => $sortDirection])->onEachSide(0)->links('pagination::bootstrap-5') }}
    </div>
@endsection
