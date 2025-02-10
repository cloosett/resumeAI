@extends('admin.layout.layout')

@section('content')
    <div class="container mt-4">
        <h2>Edit Blog</h2>

        <!-- Показати повідомлення про успіх -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Створення табів -->
        <ul class="nav nav-tabs" id="blogTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="info-tab" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Інформація</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="comments-tab" data-bs-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Коментарі</a>
            </li>
        </ul>

            <!-- Вкладки контенту -->
            <div class="tab-content mt-4" id="blogTabsContent">
                <!-- Вкладка для Інформації (редагування блогу) -->
                <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                    <form action="{{ route('admin.blogupdate', ['blog' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container text-center">
                            <div class="row row-cols-2">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="title_uk" class="form-label">Blog Title uk</label>
                                        <input type="text" class="form-control" id="title_uk" name="title[uk]" value="{{ $blog->getTranslation('title', 'uk') }}" required>
                                        @error('title.uk')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="title_en" class="form-label">Blog Title en</label>
                                        <input type="text" class="form-control" id="title_en" name="title[en]" value="{{ $blog->getTranslation('title', 'en') }}" required>
                                        @error('title.en')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="content_uk" class="form-label">Blog Content uk</label>
                                        <textarea class="form-control" id="content_uk" name="content[uk]" rows="5" required>{{ $blog->getTranslation('content', 'uk') }}</textarea>
                                        @error('content.uk')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="content_en" class="form-label">Blog Content en</label>
                                        <textarea class="form-control" id="content_en" name="content[en]" rows="5" required>{{ $blog->getTranslation('content', 'en') }}</textarea>
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
                                        <input type="text" class="form-control" id="meta_title_uk" name="meta_title[uk]" value="{{ $blog->getTranslation('meta_title', 'uk') }}" required>
                                        @error('meta_title.uk')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="meta_title_en" class="form-label">Meta Title en</label>
                                        <input type="text" class="form-control" id="meta_title_en" name="meta_title[en]" value="{{ $blog->getTranslation('meta_title', 'en') }}" required>
                                        @error('meta_title.en')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="meta_description_uk" class="form-label">Meta Description uk</label>
                                        <textarea class="form-control" id="meta_description_uk" name="meta_description[uk]" rows="5" required>{{ $blog->getTranslation('meta_description', 'uk') }}</textarea>
                                        @error('meta_description.uk')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="meta_description_en" class="form-label">Meta Description en</label>
                                        <textarea class="form-control" id="meta_description_en" name="meta_description[en]" rows="5" required>{{ $blog->getTranslation('meta_description', 'en') }}</textarea>
                                        @error('meta_description.en')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Загальні поля -->
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug (URL)" value="{{ $blog->slug }}">
                            @error('slug')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <select class="form-select" id="author" name="author_id" required>
                                <option value="" disabled>Select Author</option>
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}"
                                            @if(old('author_id', $blog->author_id) == $author->id) selected @endif>
                                        {{ $author->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('author_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="draft" {{ $blog->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="published" {{ $blog->status == 'published' ? 'selected' : '' }}>Published</option>
                            </select>
                            @error('status')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update Blog</button>
                    </form>
                </div>

                <!-- Вкладка для Коментарів -->
                <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                    <h3>Comments</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Comment</th>
                            <th scope="col">Author Name</th>
                            <th scope="col">Author Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blog->comments as $comment)
                            <tr>
                                <th scope="row">{{ $comment->content }}</th>
                                <td>{{ $comment->author_name }}</td>
                                <td>{{ $comment->author_email }}</td>
                                <td>{{ $comment->status }}</td>
                                <td>{{ $comment->created_at }}</td>
                                <td>
                                    <!-- Кнопка для зміни статусу на "approved" -->
                                    <form action="{{ route('comments.updateStatus', $comment->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-success" name="status_comment" value="approved">Approve</button>
                                    </form>

                                    <!-- Кнопка для зміни статусу на "spam" -->
                                    <form action="{{ route('comments.updateStatus', $comment->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" name="status_comment" value="spam">Spam</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
