@extends('admin.layout.layout')

@section('content')
    <div class="container mt-4">
        <h2>Tags</h2>

        <!-- Показати повідомлення про успіх -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{route('admin.tagsstore')}}" method="POST">
            @csrf
            <!-- Поле для назви блогу -->
            <div class="container text-center">
                <div class="row row-cols-2">
                    <div class="col">
                        <div class="mb-3">
                            <label for="tag_uk" class="form-label">Tags (UK)</label>
                            <input type="text" class="form-control" id="tag_uk" name="tag[uk]" placeholder="розділяйте комою" value="{{ optional($tag)->getTranslation('name', 'uk') ?? ''  }}" required>
                            @error('tag.uk')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="tag_en" class="form-label">Tags (EN)</label>
                            <input type="text" class="form-control" id="tag_en" name="tag[en]" placeholder="separate with a comma" value="{{ optional($tag)->getTranslation('name', 'en') ?? ''  }}" required>
                            @error('tag.en')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>


            <!-- Поле для вибору статусу публікації -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="draft" {{ optional($tag)->status == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ optional($tag)->status == 'published' ? 'selected' : '' }}>Published</option>
                </select>
                @error('status')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Кнопка для збереження блогу -->
            <button type="submit" class="btn btn-primary">Save Tags</button>
        </form>
    </div>
@endsection
