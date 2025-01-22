@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
<div class="container-fluid">
    <h4>Edit About Section</h4>

    <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $about->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $about->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($about->image)
                <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" width="100" class="mt-2">
            @endif
        </div>
        <div class="mb-3">
            <label for="video_url" class="form-label">Video URL</label>
            <input type="url" class="form-control" id="video_url" name="video_url" value="{{ $about->video_url }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</div>

@endsection
