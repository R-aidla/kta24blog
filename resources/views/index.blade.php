@extends('partials.layout')
@section('title', 'Home Page')
@section('content')
    <h1 class="text-4xl">Home</h1>
    <div class="text-center my-2">
        {{ $posts->links() }}
    </div>
    <div class="grid grid-cols-2 gap-4">
        @foreach($posts as $post)
            <div class="card card-side bg-base-300 shadow-sm">
                <figure class="min-w-3xs">
                    <img src="https://www.bvdia.com/wp-content/uploads/2025/05/superimage.png" alt="Artwork" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p>{{$post->snippet}}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center my-2">
        {{ $posts->links('partials/simple-pagination') }} {{-- You asked for a simple pagination reskin. You got it. I did also reskin some other things but ¯\_(ツ)_/¯ --}}
    </div>
@endsection
