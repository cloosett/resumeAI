@extends('admin.layout.layout')

@section('content')
    <div class="container mt-4">
        <h2>Create New Blog</h2>

        <!-- Показати повідомлення про успіх -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{route('admin.blogstore')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Поле для назви блогу -->
            <div class="container text-center">
                <div class="row row-cols-2">
                    <div class="col">
                        <div class="mb-3">
                            <label for="title_uk" class="form-label">Blog Title uk</label>
                            <input type="text" class="form-control" id="title_uk" name="title[uk]" value="{{ old('title.uk') }}" required>
                            @error('title.uk')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="title_en" class="form-label">Blog Title en</label>
                            <input type="text" class="form-control" id="title_en" name="title[en]" value="{{ old('title.en') }}" required>
                            @error('title.en')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="content_uk" class="form-label">Blog Content uk</label>
                            <textarea class="form-control" id="content_uk" name="content[uk]" rows="5" required>{{ old('content.uk') }}</textarea>
                            @error('content.uk')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="content_en" class="form-label">Blog Content en</label>
                            <textarea class="form-control" id="content_en" name="content[en]" rows="5" required>{{ old('content.en') }}</textarea>
                            @error('content.en')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <div class="row row-cols-2">
                    <div class="col">
                        <div class="mb-3">
                            <label for="meta_title_uk" class="form-label">Meta Title uk</label>
                            <input type="text" class="form-control" id="meta_title_uk" name="meta_title[uk]" value="{{ old('meta_title.uk') }}" required>
                            @error('meta_title.uk')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="meta_title_en" class="form-label">Meta Title en</label>
                            <input type="text" class="form-control" id="meta_title_en" name="meta_title[en]" value="{{ old('meta_title.en') }}" required>
                            @error('meta_title.en')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="meta_description_uk" class="form-label">Meta Description uk</label>
                            <textarea class="form-control" id="meta_description_uk" name="meta_description[uk]" rows="5" required>{{ old('meta_description.uk') }}</textarea>
                            @error('meta_description.uk')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="meta_description_en" class="form-label">Meta Description en</label>
                            <textarea class="form-control" id="meta_description_en" name="meta_description[en]" rows="5" required>{{ old('meta_description.en') }}</textarea>
                            @error('meta_description.en')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug (URL)">
                @error('slug')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @error('author_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <select class="form-select" id="author" name="author_id" required>
                    <option value="" selected disabled>Select Author</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
                @error('author_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Поле для вибору статусу публікації -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                </select>
                @error('status')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Кнопка для збереження блогу -->
            <button type="submit" class="btn btn-primary">Save Blog</button>
        </form>
    </div>
@endsection
