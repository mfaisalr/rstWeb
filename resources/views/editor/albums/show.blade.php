@extends('editor.layout')

@section('content')
    <div class="container">
        <h2>{{ $album->title }}</h2>
        <p>{{ $album->description }}</p>

        <div class="row">
            @foreach ($album->media as $media)
                <div class="col-md-4">
                    @if ($media->type === 'photo')
                        <img src="{{ asset('../storage/' . $media->media_path) }}" class="img-fluid" alt="Photo">
                    @elseif ($media->type === 'video')
                        <video width="320" height="240" controls>
                            <source src="{{ asset('storage/' . $media->media_path) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                </div>
            @endforeach
        </div>

        <a class="btn btn-primary" href="{{ route('albums.index') }}">Back to Albums</a>
    </div>
@endsection
