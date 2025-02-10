@extends('layouts.layout')

@section('content')
    <!-- Blog-->
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($blogs as $blog)
                        <article class="post">
                            <div class="post-preview"><a href="{{route('blogshow', ['slug' => $blog->slug])}}"><img src="{{asset('storage/' . $blog->image)}}" alt=""></a></div>
                            <div class="post-wrapper">
                                <div class="post-header">
                                    <h2 class="post-title"><a href="{{route('blogshow', ['slug' => $blog->slug])}}">{{$blog->title}}</a></h2>
                                    <ul class="post-meta">
                                        <li>{{\Carbon\Carbon::parse($blog->created_at)->format('F j, Y')}}</li>
                                        <li><a href="#">{{$blog->comments->count()}} Comments</a></li>
                                        <li><i class="ti-user"></i> {{$blog->author->name}}</li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <p>{{ \Illuminate\Support\Str::limit($blog->content, 60, '...') }}</p>
                                </div>
                                <div class="post-more"><a href="{{route('blogshow', ['slug' => $blog->slug])}}">Read more</a></div>
                            </div>
                        </article>
                    @endforeach

                    <!-- Page Navigation-->
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#"><span class="fas fa-angle-left"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span class="fas fa-angle-right"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Navigation end-->
                </div>
                @include('components.sidebarblog', ['recentposts' => $recentBlogs, 'tags' => $arrTag])
            </div>
        </div>
    </section>
    <!-- Blog end-->
@endsection
