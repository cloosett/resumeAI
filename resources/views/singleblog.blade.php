@extends('layouts.layout')

@section('content')
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post-->
                    <article class="post">
                        <div class="post-preview"><img src="{{asset('storage/' . $blog->image)}}" alt=""></div>
                        <div class="post-wrapper">
                            <div class="post-header">
                                <h1 class="post-title">{{$blog->title}}</h1>
                                <ul class="post-meta">
                                    <li>{{\Carbon\Carbon::parse($blog->created_at)->format('F j, Y')}}</li>
                                    <li><a href="#">{{$comments->count()}} Comments</a></li>
                                    <li><i class="ti-user"></i> {{$blog->author->name}}</li>
                                </ul>
                            </div>
                            <div class="post-content">
                                <p>{{$blog->content}}</p>
                            </div>
                        </div>
                    </article>
                    <!-- Post end-->

                    <!-- Comments area-->
                    <div class="comments-area m-b-50" id="comment">
                        <h5 class="comments-title">{{$comments->count()}} Comments</h5>
                        <div class="comment-list">
                            @foreach($comments as $comment)
                                <div class="comment">
                                    <div class="comment-author"><img class="avatar" src="{{ asset('image/img.png') }}" alt=""></div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <div class="comment-meta-author"><a href="#">{{ $comment->author_name }}</a></div>
                                            <div class="comment-meta-date"><a href="#">{{ $comment->created_at->format('F j, Y \a\t g:i a') }}</a></div>
                                        </div>
                                        <div class="comment-content">
                                            <p>{{ $comment->content }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="comment-respond">
                            <h5 class="comment-reply-title">Leave a Reply</h5>
                            <p class="comment-notes">Your email address will not be published. Required fields are marked</p>
                            <form action="{{ route('blogcomment') }}" method="POST" class="comment-form row">
                                @csrf
                                <input type="hidden" name="slug" value="{{ $blog->slug }}">
                                <div class="form-group col-md-4">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                                    @error('name')
                                    <div class="error-message" style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                    @error('email')
                                    <div class="error-message" style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control @error('content') is-invalid @enderror" rows="8" name="content" placeholder="Comment" required>{{ old('content') }}</textarea>
                                    @error('content')
                                    <div class="error-message" style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-submit col-md-12">
                                    <button class="btn btn-dark" type="submit">Post Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comments area end-->
                </div>
                @include('components.sidebarblog', ['recentposts' => $recentBlogs, 'tags' => $arrTag])
            </div>
        </div>
    </section>
@endsection
